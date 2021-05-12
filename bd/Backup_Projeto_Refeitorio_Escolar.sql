--
-- PostgreSQL database dump
--

-- Dumped from database version 12.5 (Ubuntu 12.5-0ubuntu0.20.04.1)
-- Dumped by pg_dump version 12.5 (Ubuntu 12.5-0ubuntu0.20.04.1)

-- Started on 2021-02-01 15:19:22 -03

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 203 (class 1259 OID 16388)
-- Name: aluno; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.aluno (
    prontuario character varying(10)
);


ALTER TABLE public.aluno OWNER TO postgres;

--
-- TOC entry 205 (class 1259 OID 16396)
-- Name: cardapio; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.cardapio (
    iddia date NOT NULL,
    diasemana character varying(7),
    cafemanha character varying(40),
    almoco character varying(50),
    cafetarde character varying(40)
);


ALTER TABLE public.cardapio OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 16391)
-- Name: cozinheira; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.cozinheira (
    prontuario character varying(10)
);


ALTER TABLE public.cozinheira OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 16385)
-- Name: pessoa; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.pessoa (
    prontuario character varying(10) NOT NULL,
    nome character varying(50),
    senha character varying(10)
);


ALTER TABLE public.pessoa OWNER TO postgres;

--
-- TOC entry 2975 (class 0 OID 16388)
-- Dependencies: 203
-- Data for Name: aluno; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.aluno (prontuario) FROM stdin;
Vp1950568
Vp1950622
Vp1950151
Vp1950517
Vp1950274
Vp1950916
Vp1950452
Vp1950355
Vp1950347
Vp1950819
\.


--
-- TOC entry 2977 (class 0 OID 16396)
-- Dependencies: 205
-- Data for Name: cardapio; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.cardapio (iddia, diasemana, cafemanha, almoco, cafetarde) FROM stdin;
2020-11-02	Segunda	Bolacha e Suco	Arroz, feijão e frango assado	Banana
2020-11-03	Terça	Bolacha e Suco	Arroz, feijão e carne de panela	Abacaxi
2020-11-04	Quarta	Bolacha e Suco	Arroz, feijoada e farofa	Melancia
2020-11-05	Quinta	Bolacha e Suco	Arroz, feijão e kibe assado	Mamão
2020-11-06	Sexta	Bolacha e Suco	Macarrão pizza e salada	Uva
\.


--
-- TOC entry 2976 (class 0 OID 16391)
-- Dependencies: 204
-- Data for Name: cozinheira; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.cozinheira (prontuario) FROM stdin;
Cp1213145
\.


--
-- TOC entry 2974 (class 0 OID 16385)
-- Dependencies: 202
-- Data for Name: pessoa; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.pessoa (prontuario, nome, senha) FROM stdin;
Vp1950568	Evelyn Nayara	Vp1950568
Vp1950151	Fabiana Rodrigues	Vp1950151
Vp1950517	Geovana Rocha	Vp1750517
Vp1950274	Giovana Cardi	Vp1950274
Vp1950916	João Otavio	Vp1950916
Vp1950452	Paulo Junior	Vp1950452
Vp1950355	Amanda Victória	Vp1950355
Vp1950819	Pablo	Vp1950819
Ad1950622	Érika Dantas Bernardes	Ad1950622
Cp1213145	Cecilia	Cp1213145
Vp1950347	  João Augusto	Vp1950347
Vp1950622	  Érika Dantas	Vp1950622
\.


--
-- TOC entry 2847 (class 2606 OID 16400)
-- Name: cardapio pk_cardapio; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cardapio
    ADD CONSTRAINT pk_cardapio PRIMARY KEY (iddia);


--
-- TOC entry 2845 (class 2606 OID 16395)
-- Name: pessoa pk_pessoa; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pessoa
    ADD CONSTRAINT pk_pessoa PRIMARY KEY (prontuario);


-- Completed on 2021-02-01 15:19:23 -03

--
-- PostgreSQL database dump complete
--

