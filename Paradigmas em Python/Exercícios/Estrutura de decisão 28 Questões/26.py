# 26. Um posto está vendendo combustíveis com a seguinte tabela de descontos:
# a. Álcool:
# b. até 20 litros, desconto de 3% por litro
# c. acima de 20 litros, desconto de 5% por litro
# d. Gasolina:
# e. até 20 litros, desconto de 4% por litro
# f. acima de 20 litros, desconto de 6% por litro Escreva um algoritmo que leia o número de litros vendidos, o tipo de
# combustível (codificado da seguinte forma: A-álcool, G-gasolina), calcule e imprima o valor a ser pago pelo cliente
# sabendo-se que o preço do litro da gasolina é R$ 2,50 o preço do litro do álcool é R$ 1,90.

#valores fixos
precoA = 1.9
precoG = 2.5
descA1 = 0.03
descA2 = 0.05
descG1 = 0.04
descG2 = 0.06
 
tipoComb = input ("Digite qual o combustivel : A - Alcool ou G - Gasolina: ")
litros = input ("Quantos litros serao comprados: ")
 
if tipoComb == "A" or tipoComb == "a":
    combustivel = "Alcool"

    if litros <= 20:
        totalApagar = litros*precoA*(1 - descA1)

    if litros > 20:
        totalApagar = litros*precoA*(1 - descA2)
 
if tipoComb == "G" or tipoComb == "g":
    combustivel = "Gasolina"

    if litros <= 20:
        totalApagar = litros * precoG * (1 - descG1)

    if litros > 20:
        totalApagar = litros * precoG * (1 - descG2)
    
        print ("Pagar R$ ", totalApagar, "por ",litros, "litros de "+ combustivel)
        print ("voce ira abastecer seu automovel com "+ combustivel)
    