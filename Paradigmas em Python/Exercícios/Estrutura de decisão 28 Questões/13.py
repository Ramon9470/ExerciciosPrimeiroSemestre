# 13. Faça um Programa que leia um número e exiba o dia correspondente da semana. (1-Domingo, 2- Segunda, etc.), se digitar
#     outro valor deve aparecer valor inválido.

semana = int ( input ('Informe o dia da semana: '))

if semana == 1:
    print ('\nDomingo')

elif semana == 2:
    print ('\nSegunda-feira')

elif semana == 3:
    print ('\nTerça-feira')

elif semana == 4:
    print ('\nQuarta-feira')

elif semana == 5:
    print ('\nQuinta-feira')

elif semana == 6:
    print ('\nSexta-feira')

else:
    print ('Número inválido!!!', semana)