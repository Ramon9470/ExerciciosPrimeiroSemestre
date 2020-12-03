cpf = int ( input ('Informe seu CPF: '))
nome = input ('Informe o seu nome: ')
rend_anual = float ( input ('Informe seus rendimento anual: '))
imposto = float ( input ('Seus imposto retido na fonte: '))
contribuicao = float ( input ('Coloque a sua contribuição previdenciária: '))
desp_medica = float ( input ('Suas despesas médicas: '))
dependentes = int ( input ('Quantidade de dependentes: '))

valor_dependente = (-2.032)
imposto_devido = (-0.11) # Erro... de lógica

valor_tatal_deducoes = contribuicao + desp_medica + valor_dependente

calculo_base = rend_anual - valor_tatal_deducoes

if (calculo_base < 21.600):
    print ('Contribuinte Isento.', calculo_base)
else:
    imposto_devido = (imposto_devido * calculo_base) - Parcela a Deduzir 

print ('Valor total: ', imposto)

# Não consegui entender essa Parcela a Deduzir!!!
# infelizmente não consegui completar o programa. 
