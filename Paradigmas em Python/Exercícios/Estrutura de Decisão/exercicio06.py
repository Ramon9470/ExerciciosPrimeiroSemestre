# 6. Faça um Programa que leia três números e mostre o maior deles.

num1 = int ( input ('Primeiro número: '))
num2 = int ( input ('Segundo número: '))
num3 = int ( input ('Terceiro número: '))

# Verificando o menor número
menor = num1

if num2 < num1 and num2 < num3:
    menor = num2

if num3 < num1 and num3 < num2:
    menor = num3

# Verificando o maior númeor
maior = num1

if num2 > num1 and num2 > num3:
    maior = num2

if num3 > num1 and num3 > num2:
    maior = num3

print ('O menor número é: ', menor)
print ('O maior número é: ', maior)
