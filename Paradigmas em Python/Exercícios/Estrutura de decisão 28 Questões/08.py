# 8. Faça um programa que pergunte o preço de três produtos e informe qual produto você deve comprar, sabendo que a
#    decisão é sempre pelo mais barato.

preco1 = float ( input ('Preço um: '))
preco2 = float ( input ('Preço dois: '))
preco3 = float ( input ('Preço três: '))

if (preco1 < preco2) and (preco1 < preco3):
    print ('\n Compre o primeiro produto.')

if (preco2 < preco1) and (preco2 < preco3):
    print ('\n Compre o segundo produto.')

if (preco3 < preco1) and (preco3 < preco2):
    print ('\n Compre o terceiro produto.')