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
  tags:
    label: Tags
    type:  tags
  date:
    label: Date
    type:  date
  text:
    label: Text
    type:  textarea
  append_images:
    label: Append Images
    type:  checkbox
    text: Append all images at the end of the page.
    default: true
