<?php
/**
 * Created by PhpStorm.
 * User: NamMA
 * Date: 9/15/14
 * Time: 3:56 AM
 */
$this->startSetup();

$tableName = $this->getTable('excellence_employee/employee');

$this->run("
    DROP TABLE IF EXISTS `{$tableName}`;

    CREATE TABLE `{$tableName}` (
      `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      `name` VARCHAR(255) NOT NULL,
      `type` INT NOT NULL DEFAULT 1,
      `content` TEXT,
      `status` BOOLEAN NOT NULL DEFAULT TRUE
    );

    INSERT INTO `{$tableName}` VALUES
      (null, 'Nam Mai Anh', 2, 'The very first employee', TRUE);
");

$this->endSetup();
