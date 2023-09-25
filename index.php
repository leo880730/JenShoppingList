<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>尖尖の日本国shopping list</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="/shopping_list/style.css">
</head>
<body>
  <div class="m-5">
    <header class="mb-3">
      <h4>尖尖の日本国shopping list</h4>
       <div class="content__wrapper">
          <input type="text" placeholder="add item" id="new-item" class="form--custom form-control me-2">
          <button id="add-btn" class="btn btn-info">Add</button>
      </div>
    </header>
    <ul id="shopping-list" class="list-unstyled">
      
      <!-- display items here -->

    </ul>
    <div class="deco-container">
      <img src="./images/f2@3x.png" class="deco-items" id="white-flower">
      <img src="./images/f3@3x.png" class="deco-items" id="blue-flower">
    </div>
  </div>
</body>
  <script src="https://kit.fontawesome.com/dfe50b8167.js" crossorigin="anonymous"></script>

  <script>
    // 初始變數
  let list = document.querySelector('#shopping-list')
  let addBtn = document.querySelector('#add-btn')
  let input = document.querySelector('#new-item')

  // 資料
  const todos = ['紅紅的眼藥水', '胃藥', 'UQ衣服']
  for (let todo of todos) {
    addItem(todo)
  }


  function addItem (text) {
    let newItem = document.createElement('li')
    newItem.innerHTML = `
    <input class="form-check-input" type="checkbox">
      <label for="todo">${text}</label>
      <i class="delete fa fa-trash delete-btn"></i>
    `
    list.appendChild(newItem)
  }


  addBtn.addEventListener('click', function(){
    let inputValue = input.value
    if(inputValue.length > 0){
      addItem(inputValue)
    }
  })

  list.addEventListener('click', function(event){
    let target = event.target
    console.log(target)
    if(target.classList.contains('delete')){
      let parentElement = target.parentElement
      parentElement.remove()
    }
    
    else if(target.tagName === 'LABEL'){
      target.classList.toggle('checked')
    }
  })
  </script>
</html>