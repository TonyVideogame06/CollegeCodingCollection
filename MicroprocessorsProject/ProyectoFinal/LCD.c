/*
 * LCD.c
 *
 *  Created on: 6 nov. 2020
 *      Author: ba-an
 */

/*
* LCD.c o el nombre que desees con la extensión .c
*
*/

#include <msp430g2553.h>

#include "LCD.h" //documento con el mismo nombre .h

//Incluir todas las constantes que se usan en el código del LCD
const unsigned char TablaComandos[5] =
{
     0x28, 0x0C, 0x01, 0x06, 0x80 // 0x80 direccion de escritura
};
const unsigned char TablaDatos [16] =
{ " Proyecto Final " };
const unsigned char TablaDatos1 [11] =
{ "Distancia: " };

// Incluir todas las funciones prototipo
// función de escritura del LCD

// función de escritura del LCD
void wr_lcd(void)
{
    P2OUT |= E;     // habilita al display
    _delay_cycles(2000);
    P2OUT &= ~E;    // deshabilita al display
    _delay_cycles(2000);
}


// funcion principal de escritura
void displayinicio(void)
{
    P2OUT &= ~RS;                                   // selecciona entrada de comandos

    PunteroTabla = (unsigned char*) TablaComandos;  // apunta a la tabla
    ContDatos = sizeof TablaComandos;           // Carga al contador de la tabla

    Variable = *PunteroTabla++;             // envia el dato al puerto
    CopiaVariable = (Variable & 0xF0) ;             // proteje el nibble superior
    VariableLow = P2OUT;
    VariableLow = (VariableLow & 0x03);         // cuidar los bits RS y E
    CopiaVariable = CopiaVariable | VariableLow;    // concatenar bits
    P2OUT = CopiaVariable;      //
    wr_lcd();                                   // escribe al lcd
    _delay_cycles(5000);                                // retardo de tiempo
    P2OUT = CopiaVariable;      //
    wr_lcd();                                   // escribe al lcd
    Variable = Variable << 4;               // preparaón del nibble bajo del comando corrimiento
    CopiaVariable = (Variable & 0xF0);
    CopiaVariable = CopiaVariable | VariableLow;    // concatenar bits
    P2OUT = CopiaVariable;                          // envía el comando
    wr_lcd();                                       // escribe al display
    ContDatos--;                                        // decrementa al contador de datos


    while(ContDatos !=0)                                // ejecuta mientras se cumpla
    {
        Variable = *PunteroTabla++;                     // envia el dato al puerto
        CopiaVariable = (Variable & 0xF0) ;             // proteje el nibble superior
        VariableLow = P2OUT;
        VariableLow = (VariableLow & 0x03);             // cuidar los bits RS y E
        CopiaVariable = CopiaVariable | VariableLow;    // concatenar bits
        P2OUT = CopiaVariable;                          // envía el comando
        wr_lcd();                                       // escribe al display

        Variable = Variable << 4;                   // preparaón del nibble bajo del comando corrimiento
        CopiaVariable = (Variable & 0xF0);
        CopiaVariable = CopiaVariable | VariableLow;    // concatenar bits
        P2OUT = CopiaVariable;                          // envía el comando
        wr_lcd();                                       // escribe al display
        ContDatos--;                                    // decrementa al contador de datos

    }
}

void renglon1(void)
{
    P2OUT |= RS;                    // seleciona entrada de datos

    PunteroTabla = (unsigned char*) TablaDatos;         //apunta a la tabla
    ContDatos = sizeof TablaDatos;                      // carga al contador de la tabla

    while(ContDatos !=0)                                // ejecuta mientas se cumpla
    {
        Variable = *PunteroTabla++;                     // envia el dato al puerto
        CopiaVariable = (Variable & 0xF0) ;             // proteje el nibble superior
        VariableLow = P2OUT;
        VariableLow = (VariableLow & 0x03);             // cuidar los bits RS y E
        CopiaVariable = CopiaVariable | VariableLow;    // concatenar bits
        P2OUT = CopiaVariable;                          // envía el comando
        wr_lcd();                                       // escribe al display

        Variable = Variable << 4;                   // preparaón del nibble bajo del comando corrimiento
        CopiaVariable = (Variable & 0xF0);
        CopiaVariable = CopiaVariable | VariableLow;    // concatenar bits
        P2OUT = CopiaVariable;                          // envía el comando
        wr_lcd();                                       // escribe al display
        ContDatos--;                                    // decrementa al contador de datos
    }
}

//Escritura Renglon inferior
void cambiorenglon(void){

    P2OUT &= ~RS;                                   // selecciona entrada de comandos
                                                    // envio comando que coloca el cursor
                                                    // en el inicio del 2o renglon
    Variable = 0xC0;                                // envia el dato al puerto  dirección
    CopiaVariable = (Variable & 0xF0) ;             // proteje el nibble superior
    VariableLow = P2OUT;
    VariableLow = (VariableLow & 0x03);             // cuidar los bits RS y E
    CopiaVariable = CopiaVariable | VariableLow;    // concatenar bits
    P2OUT = CopiaVariable;                          // envía el comando
    wr_lcd();                                       // escribe al display

    Variable = Variable << 4;                       // preparaón del nibble bajo del comando corrimiento
    CopiaVariable = (Variable & 0xF0);
    CopiaVariable = CopiaVariable | VariableLow;    // concatenar bits
    P2OUT = CopiaVariable;                          // envía el comando
    wr_lcd();                                       // escribe al display
                                                    // decrementa al contador de datos

}

void renglon2(void){
        P2OUT |= RS;                                        // seleciona entrada de datos
        PunteroTabla = (unsigned char*) TablaDatos1;        //apunta a la tabla renglon inferior
        ContDatos = sizeof TablaDatos1;                         // carga al contador de la tabla

        while(ContDatos !=0)                                // ejecuta mientas se cumpla
        {
            Variable = *PunteroTabla++;                     // envia el dato al puerto
            CopiaVariable = (Variable & 0xF0) ;             // proteje el nibble superior
            VariableLow = P2OUT;
            VariableLow = (VariableLow & 0x03);             // cuidar los bits RS y E
            CopiaVariable = CopiaVariable | VariableLow;    // concatenar bits
            P2OUT = CopiaVariable;                          // envía el comando
            wr_lcd();                                       // escribe al display

            Variable = Variable << 4;                   // preparaón del nibble bajo del comando corrimiento
            CopiaVariable = (Variable & 0xF0);
            CopiaVariable = CopiaVariable | VariableLow;    // concatenar bits
            P2OUT = CopiaVariable;                          // envía el comando
            wr_lcd();                                       // escribe al display
            ContDatos--;                                    // decrementa al contador de datos
        }

}

void LCDdato(unsigned char dato)
{
    P2OUT |= RS;
    Variable = dato; // envia el dato al puerto
    CopiaVariable = (Variable & 0xF0) ; // proteje el nibble superior
    VariableLow = P2OUT;
    VariableLow = (VariableLow & 0x03); // cuidar los bits RS y E
    CopiaVariable = CopiaVariable | VariableLow; // concatenar bits
    P2OUT = CopiaVariable; // envía el comando
    wr_lcd(); // escribe al display
    Variable = Variable << 4; // corrimiento
    CopiaVariable = (Variable & 0xF0);
    CopiaVariable = CopiaVariable | VariableLow; // concatenar bits
    P2OUT = CopiaVariable; // envía el comando
    wr_lcd(); // escribe al display
}

