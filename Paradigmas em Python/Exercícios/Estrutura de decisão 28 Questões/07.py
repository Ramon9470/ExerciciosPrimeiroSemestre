
num1 = int ( input ('Digite o primeiro número: '))
num2 = int ( input ('Digite o segundo número: '))
num3 = int ( input ('Digite o terceiro número: '))

# Verificando o menor número
menor = num1

if num2 < num1 and num2 < num3:
    menor = num2

if num3 < num1 and num3 < num2:
    menor = num3

# Verificando o maior número
maior = num1

if num2 > num1 and num2 > num3:
    maior = num2    

if num3 > num1 and num3 > num2:
    maior = num3

print ('O manor número é: ', menor)
print ('O maior número é: ', maior)
