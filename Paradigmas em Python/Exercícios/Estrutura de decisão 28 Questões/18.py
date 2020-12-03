# 18. Faça um Programa que peça uma data no formato dd/mm/aaaa e determine se a mesma é uma data válida.

data = int ( input ('Informe uma data [dd/mm/aaaa] correspondente a um determinado ano: '))

dia = int (data [0:2])
mes = int (data [3:5])
ano = int (data [6:10])

validade = "true"
i = 0

while validade == "true" and i == 0:
    if (ano % 4 == 0 and ano % 100 != 0) or ano % 400 == 0:
        bissexto = "sim"
    else:
        bissexto = "não"
    
    if mes < 1 or mes > 12:
        validade = "false"

    if dia > 31 or ((mes == 4 or mes == 6 or mes == 9 or mes == 11) and dia > 30):
        validade = "false"

    if (mes == 2 and bissexto == "não" and dia > 28) or (mes == 2 and bissexto == "sim " and dia > 29):
        validade = "false"

    i = i + 1

if validade == "true":
    print ('Data valida')
else:
    print ('Data invalida')
