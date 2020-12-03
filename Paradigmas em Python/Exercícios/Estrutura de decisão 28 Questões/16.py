# 16. Faça um programa que calcule as raízes de uma equação do segundo grau, na forma ax2 + bx + c. O programa deverá
# pedir os valores de a, b e c e fazer as consistências, informando ao usuário nas seguintes situações:
# a. Se o usuário informar o valor de A igual a zero, a equação não é do segundo grau e o programa não deve fazer
# pedir os demais valores, sendo encerrado;
# b. Se o delta calculado for negativo, a equação não possui raizes reais. Informe ao usuário e encerre o programa;
# c. Se o delta calculado for igual a zero a equação possui apenas uma raiz real; informe-a ao usuário;
# d. Se o delta for positivo, a equação possui duas raiz reais; informe-as ao usuário;

import math

print ('Digite os termos da equação a, b e c da equação ax^2 + bx + c')

a = input ('Digite o termo a: ')

if a == 0:
    print ('Não é uma equação de sengundo grau.')
else:
    b = input ('Digite o termo b: ')
    c = input ('Digite o termo c: ')
    delta = (math.pow(b,2) - (4 * a * c))

    if delta < 0:
        print ('Delta = ', delta, 'a equeção não possui raizes reais')
    if delta == 0:
        print ('Delta = ', delta, 'a equação possui uma raiz')
        raiz = ((-1) * b + math.sqrt(delta)) / (2 * a)
        print ('Raiz da equação = ', raiz)
    if delta > 0:
        print ('Delta = ', delta, " a equação possui duas raizes")
        raiz1 = ((-1) * b + math.sqrt(delta)) / (2 * a)
        raiz2 = ((-1) * b - math.sqrt(delta)) / (2 * a)
        print ('Raiz 1 da equação = ', raiz1)
        print ('Raiz 2 da equação = ', raiz2)