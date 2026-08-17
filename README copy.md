# TAH CRM

CRM comercial desenvolvido para centralizar a operação de vendas da **TAH Tecnologia**.

A plataforma gerencia leads, empresas, oportunidades, propostas, contratos, vendas, recebimentos, comissões, metas, atividades e representantes comerciais em um único ambiente.

## Visão geral

O TAH CRM acompanha todo o processo comercial:

```text
Lead
  ↓
Qualificação
  ↓
Oportunidade
  ↓
Proposta
  ↓
Negociação
  ↓
Contrato
  ↓
Venda
  ↓
Recebimento
  ↓
Comissão
  ↓
Pós-venda
```

## Funcionalidades

* Dashboard comercial
* Gestão de leads
* Cadastro de empresas e contatos
* Funil de vendas em Kanban
* Gestão de oportunidades
* Atividades e follow-ups
* Calendário comercial
* Propostas comerciais
* Aprovação de descontos
* Contratos
* Vendas e parcelamentos
* Controle de recebimentos
* Cálculo de comissões
* Contratos recorrentes
* Metas e bônus
* Ranking comercial
* Gestão de representantes
* Relatórios
* Forecast de vendas
* Documentos
* Notificações
* Auditoria
* Controle de permissões

## Perfis de acesso

O sistema possui diferentes níveis de acesso:

### Administrador

Acesso completo à plataforma.

### Gestor Comercial

Gerenciamento de equipe, oportunidades, metas, propostas e indicadores.

### Representante Comercial

Acesso aos próprios leads, oportunidades, propostas, vendas, metas e comissões.

### Financeiro

Gerenciamento de recebimentos, parcelas e comissões.

### Técnico

Acesso às informações técnicas relacionadas às oportunidades e projetos.

## Stack

### Front-end

* React
* TypeScript
* Tailwind CSS

### Backend

* Supabase
* PostgreSQL

### Autenticação

* Supabase Auth

### Storage

* Supabase Storage

### Segurança

* Row Level Security - RLS

## Estrutura principal

```text
src/
├── components/
├── pages/
├── hooks/
├── services/
├── integrations/
├── lib/
├── types/
└── utils/
```

A estrutura pode variar conforme a evolução do projeto.

## Banco de dados

Principais entidades:

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

documents
notifications
audit_logs
settings
lost_reasons
handoffs
```

## Fluxo comercial

```text
Prospecção
    ↓
Lead
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
Fechado
```

## Funil

Etapas padrão:

* Novo Lead
* Contato
* Qualificação
* Reunião
* Diagnóstico
* Orçamento
* Proposta
* Negociação
* Fechado - Ganho
* Fechado - Perdido

## Comissões

O sistema possui regras configuráveis de comissão.

Exemplo:

| Serviço               | Comissão |
| --------------------- | -------: |
| Landing Page          |      20% |
| Site Institucional    |      20% |
| Site Premium          |      20% |
| E-commerce            |      20% |
| Sistema personalizado |      15% |
| Aplicativo            |      15% |
| Automação             |  15%–20% |
| Consultoria           |      20% |
| Suporte               |      15% |
| Infraestrutura        |      15% |

As regras podem variar de acordo com:

* origem do lead;
* serviço;
* representante;
* venda compartilhada;
* contrato recorrente;
* campanhas comerciais;
* aprovação administrativa.

## Comissão por recebimento

As comissões são calculadas com base nos valores efetivamente recebidos.

Exemplo:

```text
Venda: R$ 10.000
Comissão: 20%

Recebido do cliente: R$ 5.000

Comissão liberada: R$ 1.000
```

## Metas

O sistema permite configurar metas por:

* representante;
* equipe;
* faturamento;
* serviço;
* novos clientes;
* receita recorrente.

Também possui suporte a bônus por performance.

## Proteção de leads

Leads podem ficar protegidos por um período definido para evitar conflitos entre representantes.

Configuração inicial:

```text
Proteção: 90 dias
Alerta de inatividade: 30 dias
```

## Segurança

O sistema utiliza autenticação e políticas de segurança no banco.

Cada perfil acessa apenas os dados permitidos.

Representantes, por exemplo, não devem acessar automaticamente oportunidades pertencentes a outros representantes.

As regras de acesso são aplicadas através de:

```text
Supabase Auth
+
PostgreSQL
+
Row Level Security
```

## Configuração do projeto

Clone o repositório:

```bash
git clone URL_DO_REPOSITORIO
```

Entre na pasta:

```bash
cd tah-crm
```

Instale as dependências:

```bash
npm install
```

Crie um arquivo:

```bash
.env
```

Adicione as variáveis necessárias:

```env
VITE_SUPABASE_URL=
VITE_SUPABASE_ANON_KEY=
```

Execute:

```bash
npm run dev
```

## Scripts

```bash
npm run dev
```

Executa o ambiente de desenvolvimento.

```bash
npm run build
```

Gera a versão de produção.

```bash
npm run preview
```

Executa localmente a versão compilada.

```bash
npm run lint
```

Executa análise de código.

## Variáveis de ambiente

Nunca publique credenciais privadas no GitHub.

Utilize `.env` localmente e mantenha:

```text
.env
.env.local
```

no `.gitignore`.

Exemplo:

```env
VITE_SUPABASE_URL=https://seu-projeto.supabase.co
VITE_SUPABASE_ANON_KEY=sua-chave-publica
```

Nunca exponha:

* service role key;
* secrets;
* senhas;
* tokens privados;
* credenciais administrativas.

## Roadmap

### Fase 1

* [ ] Autenticação
* [ ] Usuários e permissões
* [ ] Empresas
* [ ] Contatos
* [ ] Leads
* [ ] Oportunidades
* [ ] Kanban
* [ ] Atividades

### Fase 2

* [ ] Serviços
* [ ] Propostas
* [ ] Aprovação de descontos
* [ ] Contratos
* [ ] Vendas
* [ ] Parcelas

### Fase 3

* [ ] Recebimentos
* [ ] Comissões
* [ ] Metas
* [ ] Bônus
* [ ] Contratos recorrentes

### Fase 4

* [ ] Dashboards
* [ ] Relatórios
* [ ] Ranking
* [ ] Forecast

### Fase 5

* [ ] Documentos
* [ ] Notificações
* [ ] Auditoria
* [ ] Handoff
* [ ] Integrações externas

## Roadmap futuro

Possíveis integrações:

* WhatsApp
* Gmail / SMTP
* Google Calendar
* Microsoft Calendar
* assinatura eletrônica
* n8n
* APIs externas
* inteligência artificial

Possíveis funcionalidades de IA:

* resumo automático da oportunidade;
* sugestão de próxima ação;
* criação de follow-up;
* classificação de leads;
* análise de probabilidade de fechamento;
* criação de mensagens comerciais;
* análise de motivos de perda.

## Status

Projeto em desenvolvimento.

## Uso

Este projeto foi desenvolvido para uso interno da **TAH Tecnologia**.

Não é autorizada a reprodução, distribuição, comercialização ou utilização do código sem autorização.

## Autor

**TAH Tecnologia**

Tecnologia que conecta. Soluções que transformam.