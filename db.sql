CREATE TABLE `hb_store` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT, 
  `Number` varchar(255) NOT NULL DEFAULT '0',
  `Location` varchar(255) NOT NULL DEFAULT '0',
  `Div` varchar(255) NOT NULL DEFAULT '0',
  `FactryDiv` varchar(255) NOT NULL DEFAULT '0',
  `line` varchar(255) NOT NULL DEFAULT '0',
  `process` varchar(45) NOT NULL DEFAULT '0',
  `purpose` varchar(255) NOT NULL DEFAULT '0',
  `ffci` varchar(255) NOT NULL DEFAULT '0',
  `ev` varchar(255) NOT NULL DEFAULT '0',
  `jugement` varchar(255) NOT NULL DEFAULT '0',
  `actualmaster` varchar(255) NOT NULL DEFAULT '0',
  `using_master` varchar(255) NOT NULL DEFAULT '0',
  `cf` varchar(255) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT '0',
  `file` varchar(255) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;


CREATE TABLE `hb_store_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT, 
  `type` varchar(255) NOT NULL DEFAULT '0',
  `number` varchar(255) NOT NULL DEFAULT '0',
  `location` varchar(255) NOT NULL DEFAULT '0',
  `div` varchar(255) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;


CREATE TABLE `hb_store_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL DEFAULT '0',
  `number` varchar(255) NOT NULL DEFAULT '0',
  `location` varchar(255) NOT NULL DEFAULT '0',
  `div` varchar(255) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
