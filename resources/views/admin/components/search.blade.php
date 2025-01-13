<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
    <div class="col-auto">
        <form action="{{ $route }}" method="GET" class="table-search-form row gx-1 align-items-center">
            <div class="col-auto">
                <input type="text" id="search-orders" name="searchorders" class="form-control search-orders"
                    placeholder="Search" value="{{ request('searchorders') }}">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn app-btn-secondary">Search</button>
            </div>
        </form>
    </div><!--//col-->
    <div class="col-auto">
        <form action="{{ $route }}" method="GET" class="d-inline">
            <select name="year" class="form-select w-auto" onchange="this.form.submit()">
                <option value="">All</option>
                @foreach ($years as $year)
                    <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>
                        {{ $year }}
                    </option>
                @endforeach
            </select>
        </form>
    </div>
</div><!--//row-->
