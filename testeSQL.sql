-- TESTES DE SQL
-- Resposta 1-a
SELECT nome FROM organizacao ORDER BY data_fundacao DESC LIMIT 1;

-- Resposta 1-b
SELECT nome FROM colaborador ORDER BY salario DESC LIMIT 1;

-- Resposta 1-c
SELECT nome, data_nascimento FROM colaborador ORDER BY salario DESC;

-- Resposta 1-d
SELECT (YEAR(now()) - YEAR(data_nascimento)) as idade FROM colaborador;

-- Resposta 1-e
SELECT t1.nome as colaborador, t2.nome as organizacao FROM colaborador t1 LEFT JOIN organizacao t2 ON t1.organizacao_id = t2.id;

-- Resposta 2
SELECT t1.*, (SELECT max(salario) from colaborador where organizacao_id = t1.id) as max_salario FROM organizacao t1 ORDER BY max_salario DESC LIMIT 1;

-- Resposta 3
SELECT t1.* , (SELECT (sum(salario)/count(id)) as media from colaborador where organizacao_id = t1.id) as media FROM organizacao t1;

-- Resposta 4
SELECT t1.*, (SELECT min(YEAR(now()) - YEAR(data_nascimento)) from colaborador where organizacao_id = t1.id) as min_idade FROM organizacao t1 ORDER BY min_idade ASC LIMIT 1;


