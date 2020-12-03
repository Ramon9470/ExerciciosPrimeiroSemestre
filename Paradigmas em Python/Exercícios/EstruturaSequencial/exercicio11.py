# 11. Faça um Programa que peça 2 números inteiros e um número real. Calcule e mostre:
# a. o produto do dobro do primeiro com metade do segundo .
# b. a soma do triplo do primeiro com o terceiro.
# c. o terceiro elevado ao cubo.

inteiro1 = int ( input ('Digite o primeiro número inteiro: '))
inteiro2 = int ( input ('Digite o segundo número inteiro:'))
real = float ( input ('Digite um número real: '))

a = (inteiro1 * 2) + (inteiro2 / 2)
b = (inteiro1 * 3) + real
c = real ** 3

print ('Primeiro número Inteiro: ', a, '\nSegundo número Inteiro: ', b, '\nNúmero real: ', c)
