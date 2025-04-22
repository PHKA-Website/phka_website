# website

## Requirements
- Composer installed globally or locally

## Installation process
1. Create a key pair for each repo with the same user who runs Composer and Git on the system. Use your __github email address__ as the comment.
-- `ssh-keygen -t ed25519 -f ~/.ssh/phka_website_deploy_key -C "your_email@example.com"`
-- `ssh-keygen -t ed25519 -f ~/.ssh/phka_sitepackage_deploy_key -C "your_email@example.com"`
2. Enter or leave blank the passphrase to encrypt the private key. For deployment purposes (read-only) we recommend not setting a passphrase.
3. Add the contents of the respective public key as the Github deployment key for the following repositories. Take care of the permissions.
-- `cat ~/.ssh/phka_website_deploy_key.pub` > https://github.com/PHKA-Website/phka_website
-- `cat ~/.ssh/phka_sitepackage_deploy_key.pub` > https://github.com/PHKA-Website/phka_sitepackage
4. Add the following SSH configuration to `~/.ssh/config`.
```
Host github.com-phka_website
    Hostname github.com
    IdentityFile ~/.ssh/phka_website_deploy_key

Host github.com-phka_sitepackage
    Hostname github.com
    IdentityFile ~/.ssh/phka_sitepackage_deploy_key
```
5. Clone the repository
`git clone git@github.com-website:PHKA-Website/phka_website.git`
6. Install composer dependencies
7. Setup an `.env` file based on `.env.example`.
`cp .env.example .env`
