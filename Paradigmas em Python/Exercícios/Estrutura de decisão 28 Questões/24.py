# 24. Faça um Programa que leia 2 números e em seguida pergunte ao usuário qual operação ele deseja realizar. O resultado da
# operação deve ser acompanhado de uma frase que diga se o número é:
# a. par ou ímpar;
# b. positivo ou negativo;
# c. inteiro ou decimal.

operacao = input ("qual operacao deseja efetuar? digite ADICAO, SUBTRACAO, MULTIPLICACAO, DIVISAO: ")
numero1 = input ("digite um numero: ")
numero2 = input ("digite outro numero: ")
 
if operacao == "ADICAO" or operacao == "adicao":
    resultado = numero1 + numero2
    print (numero1, " + ", numero2, " = ", resultado)

    if resultado % 2 == 0:
        print (resultado, ", é par")
    else:
        print (resultado, ", é impar")

    if resultado >= 0:
        print (resultado, ", é positivo")
    else:
        print (resultado, ", é negativo")

    if round (resultado) == resultado:
        print (resultado, ", é inteiro")
    else:
        print (resultado, ", é decimal")
 
if operacao == "SUBTRACAO" or operacao == "subtracao":
    resultado = numero1 - numero2
    print (numero1, " - ", numero2, " = ", resultado)

    if resultado % 2 == 0:
        print (resultado, ", é par")
    else:
        print (resultado, ", é impar")

    if resultado >= 0:
        print (resultado, ", é positivo")
    else:
        print (resultado, ", é negativo")

    if round (resultado) == resultado:
        print (resultado, ", é inteiro")
    else:
        print (resultado, ", é decimal")
 
if operacao == "MULTIPLICACAO" or operacao == "multiplicacao":
    resultado = numero1 * numero2
    print (numero1, " X ", numero2, " = ", resultado)

    if resultado % 2 == 0:
        print (resultado, ", é par")
    else:
        print (resultado, ", é impar")

    if resultado >= 0:
        print (resultado, ", é positivo")
    else:
        print (resultado, ", é negativo")

    if round (resultado) == resultado:
        print (resultado, ", é inteiro")
    else:
        print (resultado, ", é decimal")
 
if operacao == "DIVISAO" or operacao == "divisao":
    resultado = numero1 / numero2
    print (numero1, " / ", numero2, " = ", resultado)

    if resultado % 2 == 0:
        print (resultado, ", é par")
    else:
        print (resultado, ", é impar")

    if resultado >= 0:
        print (resultado, ", é positivo")
    else:
        print (resultado, ", é negativo")

    if round (resultado) == resultado:
        print (resultado, ", é inteiro")
    else:
        print (resultado, ", é decimal")