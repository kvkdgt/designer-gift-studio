@extends('theme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/gallery.css'); }} ">
<div class="headings">
        <div class="title">Our Portfolio</div>
        <div class="sub-title">Proud Part of Great Projects</div>
    </div>
<div class="card-group">
  <div class="card">
    <img src="https://picsum.photos/200" onclick="openModal('https://picsum.photos/200')" alt="Image 1">
  </div>
  <div class="card">
    <img src="https://picsum.photos/200" onclick="openModal('https://picsum.photos/200')" alt="Image 2">
  </div>
  <div class="card">
    <img src="https://picsum.photos/200" onclick="openModal('https://picsum.photos/200')" alt="Image 3">
  </div>
  <div class="card">
    <img src="https://picsum.photos/200" onclick="openModal('https://picsum.photos/200')" alt="Image 4">
  </div>
  <div class="card">
    <img src="https://picsum.photos/200" onclick="openModal('https://picsum.photos/200')" alt="Image 1">
  </div>
  <div class="card">
    <img src="https://picsum.photos/200" onclick="openModal('https://picsum.photos/200')" alt="Image 2">
  </div>
  <div class="card">
    <img src="https://picsum.photos/200" onclick="openModal('https://picsum.photos/200')" alt="Image 3">
  </div>
  <div class="card">
    <img src="https://picsum.photos/200" onclick="openModal('https://picsum.photos/200')" alt="Image 4">
  </div><div class="card">
    <img src="https://picsum.photos/200" onclick="openModal('https://picsum.photos/200')" alt="Image 1">
  </div>
  <div class="card">
    <img src="https://picsum.photos/200" onclick="openModal('https://picsum.photos/200')" alt="Image 2">
  </div>
  <div class="card">
    <img src="https://picsum.photos/200" onclick="openModal('https://picsum.photos/200')" alt="Image 3">
  </div>
  <div class="card">
    <img src="https://picsum.photos/200" onclick="openModal('https://picsum.photos/200')" alt="Image 4">
  </div>
  <!-- Add more cards as needed -->
</div>

<div id="myModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="img01">
</div>
<script>
    function openModal(imageUrl) {
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("img01");
        modal.style.display = "block";
        modalImg.src = imageUrl;
    }

    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }
</script>
@endsection