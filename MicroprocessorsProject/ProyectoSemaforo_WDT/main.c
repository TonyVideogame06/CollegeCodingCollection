#include <msp430.h> 
#include <stdbool.h>
/**
 * main.c
 */
unsigned char bandera = 0;

void main(void)
{
    WDTCTL = WDTPW | WDTHOLD;   // stop watchdog timer
    P2DIR |= BIT1;
    P2DIR |= BIT3;
    P1DIR |= BIT0;
    P1DIR |= BIT6;
    P1OUT = 0;
    P2OUT = 0;
    BCSCTL2 |= DIVM_3; //MCLK/8, valor definido en el .h
    while(1)
    {
        P1OUT &= ~BIT0;
        P1OUT &= ~BIT6;
        P2OUT &= ~BIT1;
        P2OUT &= ~BIT3;
        P1OUT |= BIT0;
        _delay_cycles(375000);
        P1OUT &= ~BIT0;
        P2OUT |= BIT1;
        P2OUT |= BIT3;
        _delay_cycles(125000);
        P2OUT &= ~BIT1;
        P2OUT &= ~BIT3;
        P1OUT ^= BIT6;
        _delay_cycles(625000);
        P1OUT &= ~BIT6;

    }
}
