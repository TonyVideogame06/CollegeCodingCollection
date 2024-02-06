;-------------------------------------------------------------------------------
; MSP430 Assembler Code Template for use with TI Code Composer Studio
;
;
;-------------------------------------------------------------------------------
            .cdecls C,LIST,"msp430g2553.h"       ; Include device header file
            
;-------------------------------------------------------------------------------
            .def    RESET                   ; Export program entry-point to
                                            ; make it known to linker.
;-------------------------------------------------------------------------------
            .text                           ; Assemble into program memory.
            .retain                         ; Override ELF conditional linking
                                            ; and retain current section.
            .retainrefs                     ; And retain any sections that have
                                            ; references to current section.

;-------------------------------------------------------------------------------
; Author: Aranda Mejía Brian Antonio
; Proyecto Semaforo
; Universidad Panamericana
; ID: 0209486
;-------------------------------------------------------------------------------
RESET       mov.w   #__STACK_END,SP         ; Initialize stackpointer
StopWDT     mov.w   #WDTPW|WDTHOLD,&WDTCTL  ; Stop watchdog timer


;-------------------------------------------------------------------------------
; Main loop here
;-------------------------------------------------------------------------------


			bis.b   #BIT1 | BIT3,&P2DIR ; LED amarillo
			bis.b   #BIT0,&P1DIR ; LED verde
			bis.b   #BIT6,&P1DIR ; LED rojo
			bis #BIT3 , &P1REN ;defino una resistencia en bit3
     		bis #BIT3, &P1OUT ;la conecto a Vcc, para que sea pull-up
inicio:

			bic.b	#BIT0,&P1OUT	; escribo 0 en el puerto
			bic.b	#BIT1 | BIT3,&P2OUT	; escribo 0 en el puerto
			bic.b	#BIT6,&P1OUT	; escribo 0 en el puerto
			mov #35500,&0x200
			mov #35500,&0x202
			mov #35500,&0x204


reinicio:
			mov #0x200,R4
			mov #0x202,R5
			mov #0x204,R6
			bit #BIT3, &P1IN
			jz semaforo

semaforo:

			bit #BIT3, &P1IN
			jz ledrojo

			bis.b	#BIT0,&P1OUT	; escribo 1 en el puerto
			call	#TiempoLedVerde
			call	#TiempoLedVerde
			call	#TiempoLedVerde
			call	#TiempoLedVerde
			call	#TiempoLedVerde
			call	#TiempoLedVerde
			call	#TiempoLedVerde
			call	#TiempoLedVerde
			call	#TiempoLedVerde
			call	#TiempoLedVerde
			call	#TiempoLedVerde
			call	#TiempoLedVerde
			call	#TiempoLedVerde
			call	#TiempoLedVerde
			call	#TiempoLedVerde

  			bic.b	#BIT0,&P1OUT	; escribo 0 en el puerto

			bit #BIT3, &P1IN
			jz ledrojo

			bis.b	#BIT1 | BIT3,&P2OUT	; escribo 1 en el puerto
			call	#TiempoLedAmarillo
			call	#TiempoLedAmarillo
			call	#TiempoLedAmarillo
			call	#TiempoLedAmarillo
			call	#TiempoLedAmarillo

  			bic.b	#BIT1 | BIT3,&P2OUT	; escribo 0 en el puerto

			bit #BIT3, &P1IN
			jz ledrojo

			bis.b	#BIT6,&P1OUT	; escribo 1 en el puerto
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo
			call	#TiempoLedRojo

  			bic.b	#BIT6,&P1OUT	; escribo 0 en el puerto

			bit #BIT3, &P1IN
			jz ledrojo

			;jmp semaforo
			ret


ledrojo:

			bit #BIT3, &P1IN
			jz semaforo

			bis.b	#BIT6,&P1OUT	; escribo 1 en el puerto
			call	#subrutina

  			bic.b	#BIT6,&P1OUT	; escribo 0 en el puerto

			cmp #0x206, R6
			jnz ledrojo
			mov #0x200,R4
			jmp ledrojo



TiempoLedVerde
  			mov		@R4,R7	; hago un retardo de tiempo con esta rutinita
restaLedVerde:
  			dec		R7		;decrementa
  			jnz		restaLedVerde	; brinca si aun no es zero
			ret

TiempoLedAmarillo
  			mov		@R5,R8	; hago un retardo de tiempo con esta rutinita
restaLedAmarillo:
  			dec		R8		;decrementa
  			jnz		restaLedAmarillo	; brinca si aun no es zero
			ret

TiempoLedRojo
  			mov		@R6,R9	; hago un retardo de tiempo con esta rutinita
restaLedRojo:
  			dec		R9		;decrementa
  			jnz		restaLedRojo	; brinca si aun no es zero
			ret

subrutina
  			mov		@R4,R10	; hago un retardo de tiempo con esta rutinita
resta:
  			dec		R10		;decrementa
  			jnz		resta	; brinca si aun no es zero
			ret


;-------------------------------------------------------------------------------
; Stack Pointer definition
;-------------------------------------------------------------------------------
            .global __STACK_END
            .sect   .stack
            
;-------------------------------------------------------------------------------
; Interrupt Vectors
;-------------------------------------------------------------------------------
            .sect   ".reset"                ; MSP430 RESET Vector
            .short  RESET
            
