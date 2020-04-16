# Essa é a nossa lista de números com números IMPARES e também PARES
numeros = [10,11,12,13,17,21,99,33,47,14,18,24,50,60,70,80]

# Para percorrer uma lista, utilizamos o for
# Para cada número (for n) em objeto lista (in numeros) faça:
for n in numeros:
    # Se o resto da divisão por 2 for igual a 0 faça:
    if (n % 2) == 0:
        #Imprima na tela o número com resto 0
        print(n)