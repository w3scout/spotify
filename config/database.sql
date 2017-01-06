-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************


-- 
-- Table `tl_module`
--
CREATE TABLE `tl_module` (
  `w3s_spotify_btn_theme` varchar(255) NOT NULL default '',
  `w3s_spotify_btn_width` varchar(255) NOT NULL default '',
  `w3s_spotify_btn_height` varchar(255) NOT NULL default '',
  `w3s_spotify_btn_view` varchar(255) NOT NULL default '',
  `w3s_spotify_btn_type` varchar(255) NOT NULL default '',
  `w3s_spotify_btn_uri` text NULL,
  `w3s_spotify_btn_trackset` text NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
