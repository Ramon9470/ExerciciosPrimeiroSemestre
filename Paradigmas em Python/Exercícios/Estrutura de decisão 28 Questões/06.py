# 6. Faça um Programa que leia três números e mostre o maior deles.

n1 = int ( input ('Digite o primeiro número: '))
n2 = int ( input ('Digite o segundo número: '))
n3 = int ( input ('Digite o terceiro número: '))

if n1 > n2 and n3:
    print (n1, ', é o maior numero!!')
elif n2 > n1 and n3:
    print (n2,', é o maior numero!!')
elif n3 > n1 and n2:
    print (n3,', é o maior numero!!')