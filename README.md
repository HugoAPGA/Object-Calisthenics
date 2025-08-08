# Object-Calisthenics
Conceitos do Object Calisthenics representados em códigos

1. Apenas um nível de identação por método

2. Nunca use else

3. Encapsule todos os tipos primitivos e strings (obsessão por tipos primitivos)

- Baixa reutilização de código
- Impossível escrever testes uintários
- Provoca duplicação de código
- Alto acoplamento
- Tipos primitivos não tem comportamento
- Impossibilidade de utilizar a modelagem tática de DDD (Value Objects)

4. Envolva coleções em classes (First class colection)

5. Use apenas um ponto por linha (Lei de Demeter) (Não fale com estranhos)
- Quebra o encapsulamento
- Gera um alto acoplamento entre as classes
- Dificuldade de manutenção
Aggregate Root - Domain Driven Design

6. Não abrevie nomes de variáveis

7. Mantenha todas as classes pequenas (máx 50 linhas)

8. Nenhuma classe com mais de duas variáveis de instância
- Alta coesão
- Baixo acoplamento (|Menor dependência entre classes)
- Single Responsability Principle (SOLID)
- Classes menores e mais simples
- Melhor encapsulamento
- Delegação de Responsabilidades
- Testes unitários mais precisos e focados
OBS: Não é aplicável em todas as situações

9. Evite métodos getters e setters
- Fere o Encapsulamento
- Separação de comportamento da entidade
- Domínio e classes anêmicas (DDD)
- Fere o princípio Tell, Don't Ask
- Problema de Semântica - Linguagem Ubíqua (DDD)
- Objetivos com estados inconsistentes