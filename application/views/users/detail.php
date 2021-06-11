<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1>User Information</h1>
        <div class="detail">
            <b>First Name: <span><?php echo $user->first_name; ?></span></b>
        </div>
        <div class="detail">
            <b>Last Name: <span><?php echo $user->last_name; ?></span></b>
        </div>
        <div class="detail">
            <b>Email: <span><?php echo $user->email; ?></span></b>
        </div>
        <div class="detail">
            <b>Phone Number: <span><?php echo $user->phone_number; ?></span></b>
        </div>
    </div>
</main>
