<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mpemba Marketplace</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php include 'partials/header.php'; ?>
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Welcome to Mpemba Marketplace</h1>
                <p>Discover, buy, and sell products easily.
                    
                </p>
                <a href="products.php" class="btn-primary">Shop Now</a>
            </div>
        </section>
        <section class="featured-products">
            <h2>Featured Products</h2>
            <div class="product-list">
                <?php include 'partials/featured-products.php'; ?>
            </div>
        </section>
        <div id="stats" class="grid grid-cols-5 gap-6 mb-10">
            <!-- Stats cards will be injected here by JS -->
        </div>
        <div id="top-selling-list" class="space-y-4">
            <!-- Top selling items injected here -->
        </div>
    </main>
    <?php include 'partials/footer.php'; ?>
    <script src="js/app.js"></script>
    <script>
    async function loadDashboard(){
        try{
            const res = await fetch('api/dashboard.php');
            if(!res.ok) throw new Error('Failed to load dashboard data');
            const data = await res.json();

            const stats = data.stats || [];
            const statsContainer = document.getElementById('stats');
            statsContainer.innerHTML = stats.map(s => `
                <div class="glass-card p-6 rounded-2xl flex flex-col items-start">
                    <div class="w-10 h-10 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center mb-4">
                        <i class="fas ${s.icon}"></i>
                    </div>
                    <span class="text-2xl font-bold text-gray-800">${s.val}</span>
                    <span class="text-[10px] uppercase font-bold tracking-widest text-gray-400">${s.label}</span>
                </div>
            `).join('');

            const top = data.top_selling || [];
            const topList = document.getElementById('top-selling-list');
            topList.innerHTML = top.map(item => `
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <img src="${item.img}" class="w-8 h-8 rounded bg-gray-50 p-1">
                        <span class="text-sm font-semibold text-gray-700">${item.name}</span>
                    </div>
                    <span class="text-sm font-bold text-gray-400">${item.qty}</span>
                </div>
            `).join('');

        }catch(err){
            console.error(err);
        }
    }
    document.addEventListener('DOMContentLoaded', loadDashboard);
    </script>
</body>
</html>
