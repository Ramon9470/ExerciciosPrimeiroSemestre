# 22. Faça um Programa que peça um número inteiro e determine se ele é par ou impar. Dica: utilize o operador módulo (resto da divisão).

numero = input ('Digite um número: ')
resto = numero % 2

if resto == 0:
    print ('É par'), numero

else:
    print ('É impar', numero)