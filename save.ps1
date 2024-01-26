
param(
    [string]$message
)

cd MyPortfolio

git add .
git commit -m $message

git push -u origin