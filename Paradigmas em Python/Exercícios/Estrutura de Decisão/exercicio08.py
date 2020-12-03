# Faça um programa que pergunte o preço de três produtos e informe qual produto você deve comprar, sabendo que a
# decisão é sempre pelo mais barato.

produto1 = float ( input ('Digite o preço do primeiro produto: '))
produto2 = float ( input ('Digite o preço do segundo produto: '))
produto3 = float ( input ('Digite o preço do terceiro produto: '))

if produto1 < produto2:
    if produto1 < produto3:
        print ('Você deve comprar o primeiro produto!')
    else:
        print ('Você deve comprar o terceiro produto!')
else:
    if produto2 < produto3:
        print ('Você deve comprar o segundo produto!')
    else:
        print ('Você deve comprar o terceiro produto!')