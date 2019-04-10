
    <!-- this is for generating the dynamic list of menu links !-->
    <?php
        $categories=DB::table('categories')->where([['status',1],['parent_id',0]])->get();
    ?>
        @foreach($categories as $category)
            <?php
                $sub_categories=DB::table('categories')->select('id','name')->where([['parent_id',$category->id],['status',1]])->get();
            ?>
                <li><a href="{{route('cats',$category->id)}}">{{$category->name}}</a></li>
        @endforeach



