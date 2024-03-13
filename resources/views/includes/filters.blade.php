<form class="p-2 m-3" action="{{asset('products')}}">
        <div class="select-catalog text-2xl">
            <select name='catalog' class="catalog-name ">
                <option value=0 class="text-xl normal-case"> Выберите каталог
                </option>
                <option value=1 class="text-xl" 
                @if(request()->has('catalog'))
                    @if(request()->get('catalog')==1)
                    selected
                    @endif
                @endif
                >Мужские
                </option>
                <option value=2 class="text-xl"
                @if(request()->has('catalog'))
                    @if(request()->get('catalog')==2)
                    selected
                    @endif
                @endif
                >Женские
                </option>
                <!-- <option value=3 class="text-xl normal-case"
                @if(request()->has('catalog'))
                    @if(request()->get('catalog')==4)
                    selected
                    @endif
                @endif
                >Распродажа
                </option> -->
                <option value=4 class="text-xl normal-case"
                @if(request()->has('catalog'))
                    @if(request()->get('catalog')==4)
                    selected
                    @endif
                @endif
                >Новые поступления
                </option>
            </select>
            
            <select name="size">
                <option value="" class="text-xl">
                    Выберите размер
                </option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
            </select>
            <label>
                <p text-2xl>Цена со скидкой</p><input type="checkbox" name='sale' value=1
                @if(request()->has('sale'))
                    @if(request()->get('sale')==1)
                    checked
                    @endif
                @endif
                >
            </label>

            <div class="grid grid-cols-2">
                <div>
                    <div x-data="{ price: {{(request()->price_min)? (int)request()->price_min:$min_price}} }" class="w-full">
                        <label for="price" class="font-bold text-gray-700" x-text="`от`  + price">{{$min_price}}</label>
                        <input type="range" min="{{$min_price}}" name="price_min" max="{{$avg_price}}" x-model="price" class="w-full h-2 bg-stone-500 appearance-none" />
                    </div>
                </div>
                <div x-data="{ price: {{(request()->price_max)? (int)request()->price_max:$max_price}} }" class="w-full">
                    <label for="price" class="font-bold text-gray-700 block text-right" x-text="`до`  + price">{{$max_price}}</label>
                    <input type="range" min="{{$avg_price}}" name="price_max" max="{{$max_price}}" x-model="price" class="w-full h-2 bg-stone-500 appearance-none" />
                </div>
            </div>
        </div>
        <div class="tex-center" text-sm mt-2>
            <button type="submit" class="btn w-full mt-4 text-2xl border-2 border-gray-400 hover:border-green-400">Сортировать</button>
        </div>
        <div class="tex-center" text-sm mt-2>
        <a href="/products" class="btn w-full mt-4 text-2xl border-2 border-gray-400 hover:border-green-400">Сбросить</a> 
        </div>
    </form>