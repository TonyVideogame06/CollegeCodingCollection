#include <msp430.h> 
#include <stdbool.h>
/**
 * main.c
 */
unsigned char bandera = 0;

void main(void)
{


    WDTCTL = WDTPW | WDTHOLD;	// stop watchdog timer
	
	P2DIR |= BIT1;
	P2DIR |= BIT3;
	P1DIR |= BIT0;
	P1DIR |= BIT6;
	P1OUT = 0;
	P2OUT = 0;
	P1REN |= BIT3;
	P1OUT |= BIT3;
	P1IE  |= BIT3;          //HABILITO INTERRUPCION EN BIT3
	P1IES |= BIT3;          //DEFINO TRANSICION DE ALTO A BAJO EN BIT3
	P1IFG &= ~BIT3;         //APAGO LA BANDERA DE INTERRUPCION //SR |= GIE;
	_BIS_SR(GIE);           //HABILITO INTERRUPCION GLOBAL
	while(1)
	{
	    while(bandera == 0)
	    {
	        P1OUT &= ~BIT0;
	        P1OUT &= ~BIT6;
            P2OUT &= ~BIT1;
	        P2OUT &= ~BIT3;
	        P1OUT |= BIT0;
	        if(bandera==1)
	        {
	                        break;
	        }
	        _delay_cycles(1000000); //El valor dentro del parentesisi esta en micro segundos
	        if(bandera==1)
	        {
	            break;
	        }
	        _delay_cycles(1000000); //El valor dentro del parentesisi esta en micro segundos
	        if(bandera==1)
	        {
	           break;
	        }
	        _delay_cycles(1000000); //El valor dentro del parentesisi esta en micro segundos
	        if(bandera==1)
	        {
	            break;
	        }
	        P1OUT &= ~BIT0;
	        P2OUT |= BIT1;
	        P2OUT |= BIT3;
	        if(bandera==1)
	        {
	            break;
	        }
	        _delay_cycles(1000000); //El valor dentro del parentesisi esta en micro segundos
	        if(bandera==1)
	        {
	            break;
	        }
	         P2OUT &= ~BIT1;
	         P2OUT &= ~BIT3;
	         P1OUT ^= BIT6;
	         //P1OUT |= BIT6;
	         if(bandera==1)
	         {
	             break;
	         }
	         _delay_cycles(1000000); //El valor dentro del parentesisi esta en micro segundos
	         if(bandera==1)
	         {
	             break;
	         }
	         _delay_cycles(1000000); //El valor dentro del parentesisi esta en micro segundos
	         if(bandera==1)
	         {
	             break;
	         }
	         _delay_cycles(1000000); //El valor dentro del parentesisi esta en micro segundos
	         if(bandera==1)
	         {
	             break;
	         }
	         _delay_cycles(1000000); //El valor dentro del parentesisi esta en micro segundos
	         if(bandera==1)
	         {
	             break;
	         }
	         _delay_cycles(1000000); //El valor dentro del parentesisi esta en micro segundos
	         if(bandera==1)
	         {
	             break;
	         }
	         P1OUT &= ~BIT6;
	    }
	    if(bandera==1)
	    {
	        P2OUT &= ~BIT1;
	        P2OUT &= ~BIT3;
	        P1OUT &= ~BIT0;
	    }
	}
}

#pragma vector = PORT1_VECTOR
    __interrupt void ISR_puerto1_bit3 (void)
    {
        _delay_cycles(100000); //El valor dentro del parentesisi esta en micro segundos
        bandera++;
        if(bandera == 1)
        {
            P2OUT &= ~BIT1;
            P2OUT &= ~BIT3;
            P1OUT &= ~BIT0;
            P1OUT |= BIT6;
        }
        if(bandera == 2)
        {
            bandera = 0;
        }
        P1IFG &= ~BIT3;     //APAGO LA BANDERA DE INTERRUPCION
    }
