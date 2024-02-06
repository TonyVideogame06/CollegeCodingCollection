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
RESET       mov.w   #__STACK_END,SP         ; Initialize stackpointer
StopWDT     mov.w   #WDTPW|WDTHOLD,&WDTCTL  ; Stop watchdog timer


;-------------------------------------------------------------------------------
; Main loop here
;-------------------------------------------------------------------------------

			bis		#BIT1 | BIT3,&P2DIR ; LED amarillo
			bis		#BIT0,&P1DIR ; LED verde
			bis		#BIT6,&P1DIR ; LED rojo
			bis		#BIT3 , &P1REN ;defino una resistencia en bit3
     		bis		#BIT3, &P1OUT ;la conecto a Vcc, para que sea pull-up
			bis		#BIT3, &P1IE		; habilito la interrupcion para P1.3
			bis		#BIT3, &P1IES		; defino flanco de bajda
			bic		#BIT3, &P1IFG		; limpio bandera de interrupcion
			eint						; bis #GIE, SR =>habilito bit de interrupcion global


inicio:

			bic		#BIT0,&P1OUT	; escribo 0 en el puerto del LED verde
			bic		#BIT1 | BIT3,&P2OUT	; escribo 0 en el puerto del LED amarillo
			bic		#BIT6,&P1OUT	; escribo 0 en el puerto del LED rojo
			mov		#35500,&0x200 ;En la direccion de memoria agrego el tiempo de los Leds en el semaforo
			mov		#65000,&0x202 ;En la direccion de memoria agrego el tiempo del Led rojo

reinicio:
			mov #0x200,R4
			mov #0x202,R5

semaforo:
			bit 	#BIT0,R8 ;Bandera del push button
			jnz ledrojo ; jump not zero brinca si aun no es zero

			bis	#BIT0,&P1OUT	; escribo 1 en el puerto
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
  			bic.b	#BIT0,&P1OUT	; escribo 0 en el puerto

  			bit 	#BIT0,R8 ;Bandera del push button
			jnz ledrojo ; jump not zero brinca si aun no es zero

			bis	#BIT1 | BIT3,&P2OUT	; escribo 1 en el puerto
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
  			bic	#BIT1 | BIT3,&P2OUT	; escribo 0 en el puerto

			bit 	#BIT0,R8 ;Bandera del push button
			jnz ledrojo ; jump not zero brinca si aun no es zero
			bis	#BIT6,&P1OUT	; escribo 1 en el puerto
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds
			call	#TiempoLeds

  			bic	#BIT6,&P1OUT	; escribo 0 en el puerto

			bit #BIT0, R8 ;Bandera del push button
			jnz ledrojo ; jump not zero brinca si aun no es zero

			jmp semaforo


ledrojo:

			bit 	#BIT0,R8 ;Bandera del push button
			jz semaforo ; brinca si es zero
			bis	#BIT6,&P1OUT	; escribo 1 en el puerto
			call	#subrutina
  			bic	#BIT6,&P1OUT	; escribo 0 en el puerto
  			bit 	#BIT0,R8
			jz semaforo ; brinca si es zero
			ret


TiempoLeds
  			mov		@R4,R7	; hago un retardo de tiempo con esta rutinita
restaLeds:
  			dec		R7		;decrementa
  			jnz		restaLeds	; brinca si aun no es zero
			ret



subrutina
  			mov		@R5,R10	; hago un retardo de tiempo con esta rutinita
resta:
  			dec		R10		;decrementa
  			jnz		resta	; brinca si aun no es zero
			ret

interrup
			mov    	#0xF000,R11
decrem
			dec 	R11
			jnz	decrem ; brinca si aun no es zero
			xor #BIT0, R8
			bit #BIT0, R8
			jz salir ; brinca si es zero
			bic	#BIT0, &P1OUT ; escribo 0 en el puerto del LED verde
			bic	#BIT1 | BIT3, &P2OUT ; escribo 0 en el puerto del LED amarillo
			bis	#BIT6, &P1OUT ;escribo 1 en el puerto del LED rojo

salir
			bic	#BIT3, &P1IFG
			reti
                                            

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
            .sect 	".int02"
            .short  interrup
