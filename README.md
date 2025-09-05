# AIZUL CRM — Starter (MVP skeleton)

Monorepo inicial para usar com o **ChatGPT Codex**.

## Estrutura
```
/api          -> (placeholder) API PHP/Laravel
/wp-plugin    -> Plugin WordPress: Rastreamento de Pedidos Capital (MVP)
/extension    -> Extensão Chrome (scaffold) com botão "Prioridade"
/docs         -> Documentação e briefs
docker-compose.yml -> MySQL + Adminer para desenvolvimento local
```

## Como usar (GUI do GitHub)
1. Crie um repositório (vazio) no GitHub e **faça upload** destes arquivos.
2. No **Codex (Web)**, selecione esse repositório para criar o ambiente.
3. No Codex, execute uma tarefa inicial, por exemplo:
   - *"Analise o repositório e abra um PR `feat: bootstrap api/plugin/extension` preparando o projeto
   para: criar projeto Laravel em /api, adicionar rotas /health e /clientes, e atualizar README
   com instruções de setup local e produção."*

## Desenvolvimento local (banco)
```bash
docker compose up -d
# MySQL: 127.0.0.1:3306 (db: aizulcrm, user: aizul / pass: aizul, root: root)
# Adminer: http://localhost:8080
```
