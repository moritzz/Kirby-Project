<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
icon: suitcase
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type:  date
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags