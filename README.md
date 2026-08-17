# TAH CRM

CRM comercial completo desenvolvido para a **TAH Tecnologia**, com foco em gestão de representantes comerciais, leads, oportunidades, propostas, contratos, vendas, pagamentos, comissões, metas e relacionamento com clientes.

O sistema foi pensado para centralizar toda a operação comercial da empresa em uma única plataforma.

---

## Visão Geral

O TAH CRM acompanha todo o ciclo comercial:

```text
Lead
  ↓
Qualificação
  ↓
Oportunidade
  ↓
Reunião
  ↓
Diagnóstico
  ↓
Proposta
  ↓
Negociação
  ↓
Contrato
  ↓
Venda
  ↓
Pagamento
  ↓
Comissão
  ↓
Pós-venda
  ↓
Upsell / Cross-sell
```

O sistema possui diferentes níveis de acesso e regras específicas para representantes comerciais autônomos.

---

# Principais Funcionalidades

## Dashboard

Dashboard administrativo com indicadores como:

* faturamento vendido;
* faturamento recebido;
* pipeline comercial;
* pipeline ponderado;
* oportunidades abertas;
* ticket médio;
* novos leads;
* novos clientes;
* receita recorrente;
* comissões previstas;
* comissões liberadas;
* metas;
* taxa de conversão;
* desempenho por representante;
* vendas por serviço;
* origem dos leads.

---

## CRM de Leads

Gestão completa de leads com:

* cadastro de empresas;
* contatos;
* telefone;
* WhatsApp;
* e-mail;
* cidade;
* estado;
* segmento;
* origem;
* representante responsável;
* serviço de interesse;
* temperatura;
* status;
* valor estimado;
* observações;
* histórico;
* próximo follow-up.

### Temperatura

* Frio
* Morno
* Quente
* Muito quente

### Status

* Novo
* Tentativa de contato
* Contato realizado
* Qualificação
* Reunião agendada
* Diagnóstico
* Proposta
* Negociação
* Ganho
* Perdido
* Follow-up futuro

---

# Proteção de Leads

Cada oportunidade poderá ficar vinculada a um representante.

Regra inicial:

```text
Proteção padrão: 90 dias
Alerta de inatividade: 30 dias
```

O sistema deve impedir conflitos entre representantes.

Ao tentar cadastrar uma empresa já existente, o usuário deverá ser informado de que existe um responsável comercial vinculado.

---

# Empresas

Cada empresa possui uma visão completa 360°.

Informações:

* razão social;
* nome fantasia;
* CNPJ;
* segmento;
* porte;
* telefone;
* WhatsApp;
* e-mail;
* site;
* Instagram;
* LinkedIn;
* endereço;
* cidade;
* estado;
* representante responsável.

Dentro da empresa será possível visualizar:

* contatos;
* oportunidades;
* atividades;
* propostas;
* contratos;
* vendas;
* financeiro;
* documentos;
* histórico.

---

# Contatos

Uma empresa poderá possuir vários contatos.

Exemplos:

* proprietário;
* CEO;
* diretor;
* gerente;
* TI;
* financeiro;
* compras;
* RH;
* marketing.

Cada contato poderá ser classificado como:

* contato principal;
* decisor;
* influenciador.

---

# Oportunidades

Uma empresa poderá possuir múltiplas oportunidades simultaneamente.

Exemplo:

```text
ABC Indústria

├── Site institucional
├── Automação comercial
└── Infraestrutura de TI
```

Campos principais:

* título;
* empresa;
* contato;
* representante;
* serviço;
* valor estimado;
* valor provável;
* probabilidade;
* etapa;
* previsão de fechamento;
* próximo passo;
* última atividade.

---

# Funil Comercial

Funil comercial em formato Kanban com suporte a Drag & Drop.

Etapas:

```text
Novo Lead
↓
Contato
↓
Qualificação
↓
Reunião
↓
Diagnóstico
↓
Orçamento
↓
Proposta
↓
Negociação
↓
Fechado — Ganho
↓
Fechado — Perdido
```

Cada card poderá mostrar:

* empresa;
* contato;
* valor;
* representante;
* temperatura;
* dias na etapa;
* probabilidade;
* próxima atividade.

---

# Atividades

Registro de todas as interações comerciais.

Tipos:

* ligação;
* WhatsApp;
* e-mail;
* reunião;
* videoconferência;
* visita;
* follow-up;
* proposta;
* tarefa;
* anotação.

Todas as atividades ficam registradas em uma timeline.

---

# Follow-ups

Sistema de acompanhamento de clientes.

Visualizações:

* atrasados;
* hoje;
* amanhã;
* esta semana;
* próximos.

Campos:

* data;
* hora;
* responsável;
* prioridade;
* descrição;
* tipo;
* status.

---

# Calendário Comercial

Calendário integrado para:

* reuniões;
* ligações;
* visitas;
* tarefas;
* follow-ups.

Visualizações:

* dia;
* semana;
* mês.

---

# Serviços

Catálogo comercial administrável.

Serviços iniciais:

* Landing Page;
* Site Institucional;
* Site Premium;
* Scroll Driven;
* E-commerce;
* Sistema Web;
* Aplicativo;
* Automação;
* Inteligência Artificial;
* Consultoria;
* Suporte;
* Infraestrutura;
* Hospedagem;
* Manutenção;
* Hardware;
* Licenciamento.

Cada serviço poderá possuir:

* preço mínimo;
* preço sugerido;
* comissão;
* desconto máximo;
* recorrência;
* status.

---

# Comissões

O sistema possui cálculo automático de comissão.

## Comissão padrão por serviço

| Serviço               |         Comissão |
| --------------------- | ---------------: |
| Landing Page          |              20% |
| Site Institucional    |              20% |
| Site Premium          |              20% |
| Scroll Driven         |              20% |
| E-commerce            |              20% |
| Sistema personalizado |              15% |
| Aplicativo            |              15% |
| Automação             |        15% a 20% |
| Consultoria           |              20% |
| Suporte               |              15% |
| Infraestrutura        |              15% |
| Hardware              | Regra específica |
| Licenciamento         | Regra específica |

Todas as porcentagens devem ser configuráveis.

---

# Origem da Venda

A origem poderá alterar a comissão.

### Lead próprio

Representante recebe a comissão integral.

Exemplo:

```text
Comissão normal: 20%
Comissão recebida: 20%
```

### Lead fornecido pela TAH

Representante recebe inicialmente 50% da comissão padrão.

```text
Comissão normal: 20%
Lead TAH: 10%
```

### Indicação simples

```text
5%
```

### Reativação

```text
15%
```

### Upsell / Cross-sell

```text
15%
```

---

# Venda Compartilhada

O sistema poderá dividir comissão entre representantes.

Exemplo:

```text
Comissão total: 20%

Representante A: 10%
Representante B: 10%
```

A soma das comissões não poderá ultrapassar o limite aprovado.

---

# Contratos Recorrentes

Regra padrão inicial:

```text
1ª mensalidade: 20%
2ª à 12ª mensalidade: 10%
Após 12 meses: sem comissão automática
```

Todas as regras devem ser configuráveis pelo administrador.

---

# Comissão por Recebimento

A comissão será gerada conforme o recebimento do cliente.

Exemplo:

```text
Venda: R$ 10.000

Comissão: 20%

Cliente pagou: R$ 5.000

Comissão liberada: R$ 1.000

Comissão restante: R$ 1.000
```

### Status das comissões

* Prevista
* Aguardando recebimento
* Liberada
* Paga
* Cancelada
* Em análise

---

# Metas

O sistema permite metas por:

* representante;
* equipe;
* serviço;
* novos clientes;
* receita recorrente.

Meta inicial sugerida:

```text
R$ 20.000 / mês
```

---

# Bônus

Faixas iniciais:

| Faturamento recebido |    Bônus |
| -------------------- | -------: |
| Até R$ 9.999         |     R$ 0 |
| R$ 10.000 – 19.999   |   R$ 300 |
| R$ 20.000 – 29.999   |   R$ 750 |
| R$ 30.000 – 49.999   | R$ 1.500 |
| R$ 50.000 – 74.999   | R$ 2.500 |
| R$ 75.000 – 99.999   | R$ 4.000 |
| R$ 100.000+          | R$ 6.000 |

As faixas devem ser configuráveis.

---

# Ranking Comercial

Ranking mensal de representantes.

Indicadores:

* posição;
* faturamento;
* percentual da meta;
* quantidade de clientes;
* contratos recorrentes;
* comissão;
* ticket médio.

Badges sugeridos:

* Meta atingida
* Clube 50K
* Clube 100K
* Maior ticket
* Mais contratos

---

# Propostas

Módulo completo de propostas comerciais.

Status:

* Rascunho
* Aguardando aprovação
* Aprovada internamente
* Enviada
* Visualizada
* Negociação
* Aceita
* Recusada
* Expirada

A proposta deverá conter:

* cliente;
* serviço;
* problema identificado;
* solução;
* escopo;
* investimento;
* prazo;
* condições de pagamento;
* validade;
* observações.

---

# Descontos

Regra inicial:

```text
Até 5%:
Representante possui autonomia.

Acima de 5%:
Necessária aprovação do gestor.
```

O sistema deverá registrar:

* solicitante;
* desconto solicitado;
* justificativa;
* aprovador;
* data;
* decisão.

---

# Contratos

Status disponíveis:

* Rascunho
* Enviado
* Assinado
* Ativo
* Suspenso
* Encerrado
* Cancelado

Campos:

* número;
* cliente;
* representante;
* serviço;
* valor;
* início;
* término;
* recorrência;
* periodicidade;
* arquivo;
* observações.

---

# Vendas

Quando uma proposta for aceita, poderá ser transformada em venda.

Campos:

* cliente;
* oportunidade;
* representante;
* serviço;
* valor bruto;
* desconto;
* valor final;
* forma de pagamento;
* parcelas;
* comissão;
* status.

---

# Parcelas

Uma venda poderá possuir várias parcelas.

Status:

* Pendente
* Pago
* Vencido
* Cancelado

Exemplo:

```text
Venda: R$ 10.000

Entrada: R$ 3.000
Parcela 2: R$ 3.500
Parcela 3: R$ 3.500
```

---

# Financeiro Comercial

O CRM possui visão financeira comercial, sem substituir um ERP contábil.

Indicadores:

* vendido;
* recebido;
* pendente;
* vencido;
* receita recorrente;
* comissão prevista;
* comissão paga;
* previsão de recebimentos.

---

# Custos de Terceiros

O sistema deverá separar:

* serviço próprio;
* hardware;
* licenças;
* hospedagem;
* terceiros;
* outros custos.

Exemplo:

```text
Projeto: R$ 50.000

Hardware: R$ 35.000
Serviço TAH: R$ 15.000
```

A comissão poderá ser calculada somente sobre a base elegível.

---

# Projetos de Alto Valor

Projetos acima de:

```text
R$ 50.000
```

deverão possuir aprovação comercial.

Será possível definir comissão específica para o negócio.

---

# Handoff Comercial

Após a venda, deverá ser realizada a transferência para a equipe operacional.

Informações:

* cliente;
* serviço;
* escopo;
* responsável técnico;
* prazo;
* integrações;
* expectativas;
* condições especiais;
* riscos;
* documentos;
* observações.

---

# Motivo de Perda

Ao perder uma oportunidade, deverá ser informado o motivo.

Opções:

* preço;
* concorrente;
* sem orçamento;
* projeto adiado;
* não respondeu;
* decidiu internamente;
* prazo;
* escopo;
* desistência;
* outro.

---

# Perfis de Acesso

## Administrador

Acesso total ao sistema.

---

## Gestor Comercial

Gerencia:

* representantes;
* leads;
* oportunidades;
* metas;
* propostas;
* descontos;
* relatórios.

---

## Representante

Visualiza apenas seus próprios registros comerciais.

---

## Financeiro

Acesso a:

* vendas;
* parcelas;
* pagamentos;
* contratos;
* comissões.

---

## Técnico

Acesso somente às informações técnicas autorizadas.

Não possui acesso às comissões.

---

# Segurança

Utilizar:

* Supabase Auth;
* PostgreSQL;
* Row Level Security;
* controle de permissões por perfil;
* políticas de acesso no banco.

A segurança não deve depender somente da interface.

---

# Auditoria

Registrar alterações importantes.

Especialmente:

* comissão;
* pagamentos;
* descontos;
* responsável comercial;
* venda;
* contrato;
* proposta.

Registrar:

```text
Usuário
Data
Ação
Valor anterior
Valor novo
```

---

# Notificações

Exemplos:

* follow-up atrasado;
* reunião próxima;
* proposta expirando;
* lead sem atividade;
* pagamento recebido;
* comissão liberada;
* meta atingida;
* desconto aprovado;
* desconto recusado;
* contrato assinado.

---

# Busca Global

Permitir busca por:

* empresa;
* contato;
* CNPJ;
* telefone;
* WhatsApp;
* oportunidade;
* proposta;
* contrato.

---

# Documentos

Arquivos organizados por cliente.

Suportar:

* PDF;
* imagens;
* propostas;
* contratos;
* briefings;
* documentos;
* planilhas.

---

# Relatórios

Relatórios disponíveis:

* vendas;
* faturamento;
* representantes;
* serviços;
* comissões;
* metas;
* leads;
* conversão;
* pipeline;
* origem;
* ticket médio;
* receita recorrente;
* contratos;
* motivos de perda;
* tempo médio de fechamento.

---

# Forecast

Previsão de fechamento em três cenários:

* conservador;
* provável;
* otimista.

Baseado nas oportunidades abertas e suas probabilidades.

---

# Tecnologias

## Front-end

* React
* TypeScript
* Tailwind CSS

## Backend / Banco

* Supabase
* PostgreSQL

## Autenticação

* Supabase Auth

## Segurança

* Row Level Security

## Storage

* Supabase Storage

---

# Estrutura de Banco Sugerida

```text
profiles
roles
users_roles
representatives

companies
contacts

leads
lead_sources
lead_protection

opportunities
pipeline_stages

activities
tasks

services

proposals
proposal_items

contracts

sales
sale_items

installments
payments

commission_rules
commissions
commission_splits

goals
goal_results

bonuses

recurring_contracts

documents

notifications

audit_logs

settings

lost_reasons

handoffs
```

---

# Ordem de Desenvolvimento

## Fase 1 — Fundação

* autenticação;
* usuários;
* perfis;
* permissões;
* empresas;
* contatos;
* leads;
* oportunidades;
* Kanban;
* atividades.

## Fase 2 — Comercial

* serviços;
* propostas;
* descontos;
* contratos;
* vendas.

## Fase 3 — Financeiro Comercial

* parcelas;
* recebimentos;
* comissões;
* recorrência;
* metas;
* bônus.

## Fase 4 — Gestão

* dashboards;
* ranking;
* relatórios;
* forecast.

## Fase 5 — Evolução

* documentos;
* notificações;
* auditoria;
* handoff;
* configurações.

---

# Estrutura Visual

A interface deve seguir a identidade visual da **TAH Tecnologia**.

Características:

* moderna;
* premium;
* tecnológica;
* corporativa;
* minimalista;
* responsiva.

Paleta principal:

* azul escuro;
* azul elétrico;
* branco;
* cinza;
* tons neutros.

Menu lateral principal:

```text
Dashboard

CRM
├── Leads
├── Empresas
├── Contatos
├── Oportunidades
└── Funil

Atividades
Calendário

Comercial
├── Propostas
├── Contratos
└── Vendas

Financeiro Comercial
├── Recebimentos
├── Parcelas
└── Comissões

Gestão
├── Metas
├── Ranking
├── Representantes
└── Relatórios

Documentos

Configurações
```

---

# Responsividade

O CRM deverá funcionar em:

* desktop;
* notebook;
* tablet;
* smartphone.

No mobile utilizar:

* drawer;
* navegação simplificada;
* cards responsivos;
* tabelas adaptáveis;
* Kanban horizontal.

---

# Regras de Desenvolvimento

Evitar funcionalidades somente visuais.

Cada módulo deverá possuir:

1. banco de dados;
2. relacionamento;
3. CRUD funcional;
4. validações;
5. permissões;
6. RLS;
7. tratamento de erros;
8. loading;
9. feedback visual;
10. responsividade.

---

# Roadmap Futuro

Após estabilização da primeira versão, poderão ser adicionadas integrações com:

* WhatsApp;
* e-mail;
* Google Calendar;
* Microsoft Calendar;
* assinatura eletrônica;
* APIs externas;
* automações;
* n8n;
* inteligência artificial.

Possíveis recursos de IA:

* resumo automático da oportunidade;
* sugestão de follow-up;
* classificação do lead;
* análise do histórico;
* sugestão da próxima ação;
* criação de e-mails comerciais;
* análise de motivos de perda;
* previsão de fechamento.

---

# Objetivo do Projeto

O **TAH CRM** deve funcionar como o centro da operação comercial da TAH Tecnologia.

A plataforma deverá permitir acompanhar o cliente desde a primeira prospecção até o pós-venda:

```text
PROSPECÇÃO
    ↓
LEAD
    ↓
QUALIFICAÇÃO
    ↓
OPORTUNIDADE
    ↓
PROPOSTA
    ↓
NEGOCIAÇÃO
    ↓
CONTRATO
    ↓
VENDA
    ↓
RECEBIMENTO
    ↓
COMISSÃO
    ↓
ENTREGA
    ↓
PÓS-VENDA
    ↓
UPSELL
```

O objetivo principal é proporcionar:

**organização, transparência, controle, produtividade, previsibilidade e crescimento comercial.**

---

# TAH Tecnologia

**Tecnologia que conecta. Soluções que transformam.**
