My Profile Website/Resume

## Purpose
This repository contains the files for my personal profile website. The purpose of this project is to practice using Git and GitHub, and to host my website online using GitHub Pages.

## Git Setup and Workflow
1. Installed Git on my local machine.
2. Initialized a Git repository in the project folder using `git init`.
3. Configured Git with my username and email
4. Added and committed the files.
5. Created a new public repository on GitHub called my-website.
6. Linked my local repository to GitHub

## Issues Encountered
When trying to push via HTTPS, I received an error:
  remote: Invalid username or token. Password authentication is not supported for Git operations.

## Solution
I switched to using SSH for authentication.
Generated an SSH key, added it to GitHub, and updated my remote URL.
After this, I was able to successfully push my repository to GitHub

## Valentin Budimir Demonstration of deploying website to GitHub pages:
  https://valik011.github.io/my-website/

DEPLOYING WITH GITHUB ACTIONS:

## Deploying My Website with GitHub Actions
1. Disabled automatic GitHub Pages publishing
   a. Opened my repository on GitHub.
   b. Navigated to Settings → Pages.
   c. Under Source, selected GitHub Actions to disable automatic publishing.
2. Created the workflow directory and file:
   .github/workflows
3. Inside it, I created a new file named:
   deploy.yml
4. After editing my Main Page I Commited and Pushed the workflow.

## Issues encountered and solutions:
1. My default branch was named 'Main', not 'Master', so had to edit the .yml file: branches: [ main ]

## How to trigger the Deployment
It is triggered AUTOMATICALLY, whenever I Push changes to my Main Branch.
   

   
