$images = @{
    'merc' = 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=900&q=80'
    'pred' = 'https://images.unsplash.com/photo-1569235056111-556a2276f9b5?auto=format&fit=crop&w=900&q=80'
    'puma' = 'https://images.unsplash.com/photo-1523531294919-6fd877cd4b7d?auto=format&fit=crop&w=900&q=80'
    'barca' = 'https://images.unsplash.com/photo-1523225331871-3b7d0f1d5f95?auto=format&fit=crop&w=900&q=80'
    'realm' = 'https://images.unsplash.com/photo-1589914080066-c9758f0c1552?auto=format&fit=crop&w=900&q=80'
    'city' = 'https://images.unsplash.com/photo-1542193567-5e4b3ba91ea2?auto=format&fit=crop&w=900&q=80'
    'ball' = 'https://images.unsplash.com/photo-1547045662-9db1cfe3c5e7?auto=format&fit=crop&w=900&q=80'
    'gloves' = 'https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=900&q=80'
}

$dest = Join-Path -Path $PSScriptRoot -ChildPath '..\public\images\products'
New-Item -ItemType Directory -Path $dest -Force | Out-Null

foreach ($key in $images.Keys) {
    $url = $images[$key]
    $out = Join-Path -Path $dest -ChildPath "$key.jpg"
    Write-Host "Downloading $key -> $out"
    Invoke-WebRequest -Uri $url -OutFile $out -UseBasicParsing -TimeoutSec 60
}
