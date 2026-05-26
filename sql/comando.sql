CREATE SCHEMA IF NOT EXISTS `petshop_db`;
USE `petshop_db`;

-- Criação da tabela produtpet
CREATE TABLE IF NOT EXISTS `produtpet` (
    `idprodutPet` INT(11) NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(200) NULL,
    `codigo` VARCHAR(200) NULL,
    `fabricante` VARCHAR(200) NULL,
    `preço` VARCHAR(200) NULL,
    `validade` VARCHAR(200) NULL,
    `pesoembalagem` VARCHAR(200) NULL,
    `indicacaoespecie` VARCHAR(200) NULL,
    `sabor` VARCHAR(200) NULL,
    `categoria` VARCHAR(200) NULL,
    PRIMARY KEY (`idprodutPet`)
);

-- Criação da tabela remedio
CREATE TABLE IF NOT EXISTS `remedio` (
    `idremedio` INT(11) NOT NULL AUTO_INCREMENT,
    `nom` VARCHAR(200) NULL,
    `validade` VARCHAR(200) NULL,
    `pesoliquido` VARCHAR(200) NULL,
    `indicacaoterapeutica` VARCHAR(200) NULL,
    `instrucoesuso` VARCHAR(200) NULL,
    PRIMARY KEY (`idremedio`)
);

-- Criação da tabela movprodut
CREATE TABLE IF NOT EXISTS `movprodut` (
    `idmovprodut` INT(11) NOT NULL AUTO_INCREMENT,
    `produtpet_idprodutPet` INT(11) NOT NULL,
    `movimento` VARCHAR(200) NULL,
    `data` VARCHAR(200) NULL,
    `quant` VARCHAR(200) NULL,
    PRIMARY KEY (`idmovprodut`, `produtpet_idprodutPet`),
    INDEX `fk_movprodut_produtpet1_idx` (`produtpet_idprodutPet` ASC),
    CONSTRAINT `fk_movprodut_produtpet1`
        FOREIGN KEY (`produtpet_idprodutPet`)
        REFERENCES `petshop_db`.`produtpet` (`idprodutPet`)
);

-- Criação da tabela movremed
CREATE TABLE IF NOT EXISTS `movremed` (
    `idmovremed` INT(11) NOT NULL AUTO_INCREMENT,
    `remedio_idremedio` INT(11) NOT NULL,
    `movimento` VARCHAR(200) NULL,
    `data` VARCHAR(200) NULL,
    `quant` VARCHAR(200) NULL,
    PRIMARY KEY (`idmovremed`, `remedio_idremedio`),
    INDEX `fk_movremed_remedio_idx` (`remedio_idremedio` ASC),
    CONSTRAINT `fk_movremed_remedio`
        FOREIGN KEY (`remedio_idremedio`)
        REFERENCES `petshop_db`.`remedio` (`idremedio`)
);





INSERT INTO produtpet(
        idprodutPet,
        nome,
        codigo,
        fabricante,
        preço,
        validade,
        pesoembalagem,
        indicacaoespecie,
        sabor,
        categoria
    )
VALUES (
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        ''
    );



INSERT INTO `animalpet`.`remedio` (
        idremedio,
        nome,
        validade,
        pesoliquido,
        indicacaoterapeutica,
        instrucoesuso
    )
VALUES ( 
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        ''
    );


