# PASSO 01
# Criamos uma variável para receber dados do usuário, a função INT() irá fazer com que o dado seja um NÚMERO INTEIRO, a função INPUT() faz com que peça o usuário um dado.
n1 = int(input('Digite um número: '))

# PASSO 02
# Repetimos o passo anterior (PASSO 1)
n2 = int(input('Digite outro número: '))

# Criamos uma variável soma para receber o valor digitado na variável N1 somada com o valor da variável N2
soma = n1 + n2

# SE variável SOMA for MAIOR QUE 20 FAÇA:
if soma > 20:
    # Mostre na tela o valor da variável SOMA e some com mais 8
    print(soma+8)
# SENÃO FAÇA:
else:
    # Mostre na tela o valor da variável SOMA e subtraia 5
    print(soma-5)