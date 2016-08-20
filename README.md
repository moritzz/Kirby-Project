# Kirby-Project

Kirby Plugin for Project image portfolios derived from the [Starterkit](https://github.com/getkirby/starterkit).

## Description

This plugin allows to add Projects with attached images and overview pages as outlined in Kirby's Starterkit.

# Installation

## Manual Setup

1. Download the Git repository as a Zip.
2. Unpack the Zip and move contents of resulting directory to `site/plugins/project`.

## Git Setup

1. Open a shell at the root of your Kirby or Kirby Starterkit installation.
2. Run `git submodule add -b master --name project git@github.com:moritzz/Kirby-Project.git site/plugins/project`

## Starterkit Users

If you based your setup on the Starterkit, you can delete the following files from you installation:

- `site/templates/projects.php`
- `site/templates/project.php`
- `site/blueprints/projects.php`
- `site/blueprints/project.php`
- `site/snippets/projects.php`

Moreover, you can remove all styles for project related contents from `assets/css/main.css`.

## Creating an overview and a Project

1. Open Kirby Panel.
2. Create a Projects page.
3. Fill out the Projects page form and configure it to your need.
4. Add Project pages as children to the Projects page.

# Version history

- v1.0: First official version
- v1.0.1: Fixed installation instructions