<div id="search-container" class="relative flex items-center bg-grey-100 ">
  <form method="GET" action="#" style="height:37px">
    <div id="search-inner" class="search-style top-inner">
      <input id="search-input" type="text"
              name="search"
              placeholder="Search"
              class=" bg-transparent placeholder-black font-semibold text-sm rounded"
              value="{{ request('search')}}"
              style="height: 100%"
              >
      <button id="search-button" type="submit" class="btn btn-md"><i class="fas fa-search"></i></button>
    </div>

          </form>
</div>
