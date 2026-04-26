<template>
  <main class="home-wrapper">

    <section class="left">

      <!-- HERO -->
      <div class="hero card">

        <div class="hero-text">
          <h2>Share More,<br />Help More.</h2>
          <p>
            Donate, lend, or borrow items and help build a stronger community.
          </p>
        </div>

        <div class="hero-image">
          <img src="@/assets/img/ex2.png" alt="hero" />
        </div>

      </div>

      <!-- MAIN CONTENT -->
      <div class="content-card card">

        <!-- CATEGORIES -->
        <div class="section">

          <div class="section-header">
            <h3>Browse by Category</h3>
            <span>View all</span>
          </div>

          <div class="categories">

            <div class="category">
              <div class="icon-box">
                <img src="@/assets/icons/application.png" />
              </div>
              <p>All</p>
            </div>

            <div class="category">
              <div class="icon-box">
                <img src="@/assets/icons/furniture.png" />
              </div>
              <p>Furniture</p>
            </div>

            <div class="category">
              <div class="icon-box">
                <img src="@/assets/icons/appliances.png" />
              </div>
              <p>Appliances</p>
            </div>

            <div class="category">
              <div class="icon-box">
                <img src="@/assets/icons/book.png" />
              </div>
              <p>Books</p>
            </div>

            <div class="category">
              <div class="icon-box">
                <img src="@/assets/icons/clothing.png" />
              </div>
              <p>Clothing</p>
            </div>

            <div class="category">
              <div class="icon-box">
                <img src="@/assets/icons/tools.png" />
              </div>
              <p>Tools</p>
            </div>

            <div class="category">
              <div class="icon-box">
                <img src="@/assets/icons/toys.png" />
              </div>
              <p>Toys</p>
            </div>

            <!-- ❌ REMOVED: Others -->

          </div>

        </div>

        <!-- FEATURED (EMPTY DESIGN ONLY) -->
        <div class="section">

          <div class="section-header">
            <h3>Featured Items</h3>
            <span>View all</span>
          </div>

          <div class="featured-grid">

            <div class="featured-card"></div>
            <div class="featured-card"></div>
            <div class="featured-card"></div>
            <div class="featured-card"></div>

          </div>

        </div>

      </div>

    </section>

    <!-- RIGHT -->
    <aside class="right">

      <!-- WELCOME -->
      <div class="card box">

        <h3>Welcome back, <span>User!</span></h3>
        <p>Thank you for being part of our community.</p>

        <div class="placeholder-box"></div>

      </div>

      <!-- QUICK ACTIONS -->
      <div class="card box">

        <h3>Quick Actions</h3>

        <div class="action">

          <div>
            <img src="@/assets/icons/add.png" />
            <span>Post an Item</span>
          </div>
          <span>›</span>

        </div>

        <div class="action">

          <div>
            <img src="@/assets/icons/shop.png" />
            <span>My Listings</span>
          </div>
          <span>›</span>

        </div>

        <div class="action">

          <div>
            <img src="@/assets/icons/time.png" />
            <span>My Requests</span>
          </div>
          <span>›</span>

        </div>

      </div>

      <!-- RECENT ACTIVITY -->
      <div class="card box">

        <h3>Recent Activity</h3>

        <div class="activity">
          <img src="@/assets/icons/shop.png" />
          <span></span>
        </div>

        <div class="activity">
          <img src="@/assets/icons/message.png" />
          <span></span>
        </div>

        <div class="activity">
          <img src="@/assets/icons/check.png" />
          <span></span>
        </div>

      </div>

    </aside>

  </main>
</template>

<script>
export default {}
</script>

<style scoped>
.home-wrapper {
  display: grid;
  grid-template-columns: 2fr 1fr;

  gap: 12px;        /* smaller gap between left & right */
  padding: 10px;    /* smaller edge spacing */

  width: 100%;
  max-width: 100%;  /* ensures full screen usage */
  box-sizing: border-box;
}

/* CARD */
.card {
  background: #fff;
  border-radius: 12px;
  padding: 16px;
}

/* HERO */
.hero {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #eaf6ee;
  margin-bottom: 20px;
}

.hero-text h2 {
  font-size: 28px;
  margin: 0;
}

.hero-text p {
  font-size: 14px;
  color: #555;
}

.hero-image img {
  width: 180px;
}

/* SECTION */
.section {
  margin-bottom: 25px;
}

.section-header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10px;
}

/* CATEGORIES */
.categories {
  display: flex;
  gap: 15px;
  flex-wrap: wrap;
}

.category {
  text-align: center;
  width: 70px;
}

.icon-box {
  width: 50px;
  height: 50px;
  background: #e4efe6;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon-box img {
  width: 20px;
}

/* FEATURED (EMPTY ONLY) */
.featured-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 10px;
}

.featured-card {
  height: 180px;
  border-radius: 10px;
  background: #f3f3f3;
}

/* RIGHT SIDE */
.right {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.box h3 {
  margin-bottom: 10px;
}

.box span {
  color: #187342;
}

/* QUICK ACTION */
.action {
  display: flex;
  justify-content: space-between;
  background: #f5f7f6;
  padding: 10px;
  margin-top: 10px;
  border-radius: 8px;
}

.action div {
  display: flex;
  gap: 8px;
  align-items: center;
}

.action img {
  width: 18px;
}

/* ACTIVITY */
.activity {
  display: flex;
  gap: 10px;
  margin-top: 10px;
}

.activity img {
  width: 18px;
}

/* PLACEHOLDER */
.placeholder-box {
  height: 80px;
  background: #eaeaea;
  margin-top: 10px;
  border-radius: 8px;
}
</style>