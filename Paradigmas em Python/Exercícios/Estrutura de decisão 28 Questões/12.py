# 12. Faça um programa para o cálculo de uma folha de pagamento, sabendo que os descontos são do Imposto de Renda, que
# depende do salário bruto (conforme tabela abaixo) e 3% para o Sindicato e que o FGTS corresponde a 11% do Salário
# Bruto, mas não é descontado (é a empresa que deposita). O Salário Líquido corresponde ao Salário Bruto menos os
# descontos. O programa deverá pedir ao usuário o valor da sua hora e a quantidade de horas trabalhadas no mês.
# Desconto do IR:
# Salário Bruto até 900 (inclusive) - isento
# Salário Bruto até 1500 (inclusive) - desconto de 5%
# Salário Bruto até 2500 (inclusive) - desconto de 10%
# Salário Bruto acima de 2500 - desconto de 20% Imprima na tela as informações, dispostas conforme o exemplo
# abaixo. No exemplo o valor da hora é 5 e a quantidade de hora é 220.

# Salário Bruto: (5 * 220) : R$ 1100,00
# (-) IR (5%) : R$ 55,00
# (-) INSS ( 10%) : R$ 110,00
# FGTS (11%) : R$ 121,00
# Total de descontos : R$ 165,00
# Salário Liquido : R$ 935,00

taxaIrList = [0.0, 0.05, 0.1, 0.2]

horasTrabalho = float ( input ("Digite a quantidade de horas trabalhadas: "))
valorHora = float ( input ("Digite o valor em reais da sua hora de trabalho: "))

salarioBruto = horasTrabalho * valorHora
taxaInss = 0.1
fgts = 0.11

if salarioBruto <= 900:
    taxaIr = taxaIrList[0]

if 900 < salarioBruto <= 1500:
    taxaIr = taxaIrList [1]

if 1500 < salarioBruto <= 2500:
    taxaIr = taxaIrList [2]

if salarioBruto > 2500:
    taxaIr = taxaIrList [3]
    descontos = (salarioBruto * taxaIr) + (salarioBruto * taxaInss)

print ("Salario Bruto: ", valorHora, " * ", horasTrabalho, " R$ ", salarioBruto)
print ("(-) IR", taxaIr * 100, "R$", salarioBruto * taxaIr)
print ("(-) INSS", taxaInss * 100, "R$", (salarioBruto * taxaInss))
print ("FGTS (11%)", (salarioBruto * fgts))
print ("Salario Liquido R$", salarioBruto - descontos)