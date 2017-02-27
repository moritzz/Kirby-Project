<?php if(!defined('KIRBY')) exit ?>

title: Projects
pages:
  template: project
  num:
    mode: date
    field: date
  sort: flip
files: false
icon: suitcase
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  projects_configuration:
    label: Projects Configuration
    type: headline
  projects_latest_heading:
    label: Latest Projects Heading
    type: text
    default: Latest Projects
  projects_image_max_width:
    label: Maximum Image Width
    type: number
    default: 880
    step: 1
  projects_more_link_text:
    label: More Link Text
    type: text
    default: Read More →
  project_date_label:
    label: Date Label
    type: text
    default: Date
  project_tags_label:
    label: Tags Label
    type: text
    default: Tags
  append_images:
    label: Append Images
    type:  checkbox
    text: Append all images at the end of the page.
    default: true

