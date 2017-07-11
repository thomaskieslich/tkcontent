CREATE TABLE tt_content (
  tx_tkcontent_cards_item INT(11) UNSIGNED DEFAULT '0'
);

CREATE TABLE tx_tkcontent_cards_item (
  uid              INT(11)                         NOT NULL AUTO_INCREMENT,
  pid              INT(11) DEFAULT '0'             NOT NULL,

  item_type        VARCHAR(255) DEFAULT ''         NOT NULL,
  tt_content       INT(11) UNSIGNED                         DEFAULT '0',
  header           VARCHAR(255) DEFAULT ''         NOT NULL,
  record           INT(11) UNSIGNED                         DEFAULT '0',
  bodytext         TEXT,
  image            INT(11) UNSIGNED                         DEFAULT '0',
  link             VARCHAR(1024) DEFAULT ''        NOT NULL,
  link_label       VARCHAR(255) DEFAULT ''         NOT NULL,

  tstamp           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  cruser_id        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted          TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  hidden           TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  starttime        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  endtime          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  t3ver_oid        INT(11) DEFAULT '0'             NOT NULL,
  t3ver_id         INT(11) DEFAULT '0'             NOT NULL,
  t3ver_wsid       INT(11) DEFAULT '0'             NOT NULL,
  t3ver_label      VARCHAR(255) DEFAULT ''         NOT NULL,
  t3ver_state      TINYINT(4) DEFAULT '0'          NOT NULL,
  t3ver_stage      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_count      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_tstamp     INT(11) DEFAULT '0'             NOT NULL,
  t3ver_move_id    INT(11) DEFAULT '0'             NOT NULL,
  sorting          INT(11) DEFAULT '0'             NOT NULL,
  t3_origuid       INT(11) DEFAULT '0'             NOT NULL,
  sys_language_uid INT(11) DEFAULT '0'             NOT NULL,
  l18n_parent      INT(11) DEFAULT '0'             NOT NULL,
  l18n_diffsource  MEDIUMBLOB,
  l10n_source      INT(11) DEFAULT '0'             NOT NULL,

  PRIMARY KEY (uid),
  KEY t3ver_oid (t3ver_oid, t3ver_wsid),
  KEY parent (pid, sorting),
  KEY language (l18n_parent, sys_language_uid)
);