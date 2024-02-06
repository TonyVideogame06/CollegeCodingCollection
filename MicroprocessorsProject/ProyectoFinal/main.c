#include <msp430g2553.h>
#include <LCD.h>

unsigned char unidades=0, decenas=0, centenas=0; //Guardar el numero del caracter perteneciente a las centenas,decenas, unidades de las distancia
unsigned int distancia; // resultado del sensor de distancia
unsigned int tiempo; // resultado del tiempo para calcular la distancia
unsigned char inicio = 0; // bandera para la interrupcion

void main(void)

{
    WDTCTL = WDTPW | WDTHOLD; // Stop watchdog timer
    //Configuracion salidas en puerto 1
    P1DIR |= BIT0|BIT1|BIT4|BIT6;
    P1SEL |= BIT1; //salida del timer para checar señal
    P1OUT &= ~BIT0;      // apagar LED
    //BIT5 para recepción de dato sensor, aterrizo resistencia a tierra en bit5 Y //HABILITO INTERRUPCION
    P1REN |= BIT5; //Se configura la resistencia de Pull Up/Down en el bit 5
    P1OUT = 0; //aseguro el pin5 en 0 (pull-down) y apago leds
    P1IE |= BIT5; //Se activa la interrupcion en el bit 5
    P1IES &= ~BIT5; // interrupcion en flanco de subida, de 0 a 1
    _BIS_SR(GIE); //Se habilita bit de interrupcion global

    P2SEL &= ~BIT6;         //configura funcion periferica para los bit 6 y 7 delpuerto 2
    P2SEL &= ~BIT7;
    P2DIR |= BIT0 + BIT1 + BIT4 + BIT5 + BIT6 + BIT7;               // configura al puerto 1 como salida
    P2OUT &= ~RS;               // selecciona entrada de comandos
    P2OUT &= ~E;                // deshabilita al display

    //Configuracion TimerA, la inicializacion se hara despues de mandar el trigger
    TACCR0 = 50000 ; // base de periodo aprox 50ms (tempo de echo 38ms si no hay ningun objeto)
    TACCR1 = 25000 ; // no es necesaria una salida del TimerA, es para verificar funcionamiento
    TACCTL0 = OUTMOD_3; // set cada que match a TACCR1 y reset cada que match a TACCR0


    displayinicio();            // inicializo display
    renglon1();                 // envio letrero renglon superior
    cambiorenglon();            // coloco el cursor al inicio del renglon inferior
    renglon2();                 // envio letrero renglon inferior
    LCDdato(centenas);          // Seguido del reglon dos, se envia lo que pertence a centenas
    LCDdato(decenas);           // Seguido de las centenas, se envia lo que pertence a decenas
    LCDdato(unidades);          // Seguido del decenas, se envia lo que pertence a unidades
    LCDdato('c');
    LCDdato('m');               // Se imprimira el letrero de las unidades de la distancia, la cual se mide en centimetros



    while(1)    {
        P1OUT &= ~BIT4;   //Apaga el LED del Bit 4
        _delay_cycles(4); // 4 us en bajo para asegurar el envio del pulso de 10uS (TRIGGER)
        P1OUT |= BIT4;  //Enciende el LED del Bit 4
        _delay_cycles(10); // 10 us en alto, valor del pulso
        P1OUT &= ~BIT4; //Apaga el LED del Bit 4
        P1OUT ^= BIT0; //XOR en el Bit 0
        int i;
        for (i=0; i<tiempo; i++){
            _delay_cycles(250);
        }
        //distancia = tiempo*0.017123;
        centenas = ((distancia / 100) + 0x30); //Operacion para calcular las centenas en codigo ascii mediante su hexadecimal
        decenas = (((distancia%100)/10) + 0x30); //Operacion para calcular las decenas en codigo ascii mediante su hexadecimal
        unidades = ((distancia%10) + 0x030); //Operacion para calcular las unidades en codigo ascii mediante su hexadecimal
        cambiorenglon(); // cursor al inicio del renglon inferior
        renglon2(); //Se imprime en el LCD los caracteres pertenecientes al renglon dos
        LCDdato( centenas ); //Se imprime en el LCD las centenas
        LCDdato( decenas ); //Se imprime en el LCD las decenas
        LCDdato( unidades ); //Se imprime en el LCD las unidades
        _delay_cycles(125000); // retardo para iniciar otra conversión

    }
}

#pragma vector = PORT1_VECTOR //Vector de interrupcion del puerto 1
__interrupt void interrupcion_por_puerto1 (void)
{
    P1OUT ^= BIT6; //XOR en el bit 6
    P1IFG &= ~BIT5; //Bandera de la interrupcion
    if(inicio==0){ //Si inicio es igual a 0
        TACTL |= TASSEL_2 + MC_1 + TACLR; // fuente SMCLK, modo UP, clr TA
        inicio=1; //Inicio es igual a uno
        P1IES |= BIT5; //flanco de bajada, interrupcion de 1 a 0
    }
    else{ //Si inicio es diferente de 0
        TACTL |= MC_0; //Se declara en TACL el modo Stop
        tiempo=TA0R; //Igualamos el tiempo a Timer0_A3 Counter Register
        distancia = tiempo*0.017123; //Calculo de la distancia. Modo alternativo: =tiempo/58 (le gustan mas las * que las /)
        P1IES &= ~BIT5; //flanco de subida, interrupcion de 0 a 1
        inicio=0; //Inicio es igual a 0
    }
}
