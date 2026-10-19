<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		
		.card {
    width: 300px;
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card-img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.card-body {
    padding: 15px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
}

.card-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 8px;
}

.card-text {
    font-size: 14px;
    line-height: 1.4;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

	</style>
</head>



<body>

	<div class="card">
    <img src="image.jpg" alt="Image" class="card-img">
    <div class="card-body">
        <h5 class="card-title">Card Title</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat felis sed sapien vehicula, quis consequat tortor placerat.</p>
    </div>
</div>


</body>
</html>