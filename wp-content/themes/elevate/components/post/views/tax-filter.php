<?php 
    $cats = get_terms( 'case_study_cat', array(
        'hide_empty' => false,
    ) );
?>
<section class="post-filter py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 filters-area">
                <div class="filter cat-filter mx-4 mb-3 mb-md-0 mx-lg-3">
                    <select class="" name="filter_tax_cats" id="filter-tax-cats-select">
                        <option selected disabled value="">Categories</option>
                        <option value="">All</option>
                        <?php foreach ($cats as $cat) { ?>
                            <option value="<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="filter search-filter mx-4 mx-lg-3">
                    <div class="search-field">
                        <input id="search-tax-filter" name="search_tax_filter" type="text" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>