# 11. As Organizações Tabajara resolveram dar um aumento de salário aos seus colaboradores e lhe contraram para
# desenvolver o programa que calculará os reajustes.
# Faça um programa que recebe o salário de um colaborador e o reajuste segundo o seguinte critério, baseado no
# salário atual:
# salários até R$ 280,00 (incluindo) : aumento de 20%
# salários entre R$ 280,00 e R$ 700,00 : aumento de 15%
# salários entre R$ 700,00 e R$ 1500,00 : aumento de 10%
# salários de R$ 1500,00 em diante : aumento de 5% Após o aumento ser realizado, informe na tela:
# o salário antes do reajuste;
# o percentual de aumento aplicado;
# o valor do aumento;
# o novo salário, após o aumento.

ajuste = 0
percentual = 0
aumento = 0
salario = float ( input ('Digite seu salário: '))

if salario <= 280:
    percentual = 0.2
    aumento = percentual * salario
    ajuste = salario * (1 + percentual)

if 280 < salario <= 700:
    percentual = 0.15
    aumento = aumento * salario
    ajuste = salario * (1 + percentual)

if 700 < salario <= 1500:
    percentual = 0.1
    aumento = aumento * salario
    ajuste = salario * (1 + percentual)

if 1500 < salario:
    percentual = 0.05
    aumento = aumento * salario
    ajuste = salario * (1 + percentual)

print ('Salário - R$: ', salario)
print ('Percentual de aumento aplicado: ', percentual * 100, "%")
print ('Valor do aumento - R$: ', aumento)
print ('Salário ajudatado - R$: ', ajuste)