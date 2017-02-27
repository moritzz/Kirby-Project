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
    default: now
  date:
    label: Date
    type:  date
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags
  append_images:
    label: Append Images
    type:  checkbox
    text: Append all images at the end of the page.
    default: true
