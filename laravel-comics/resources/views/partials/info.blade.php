<div class="comic-meta-section">
    <div class="container-info clearfix">
        <div class="comic-info-left">
            <h3>Talent</h3>
            <div class = "comic-info-box">
                <p>Art by:
                </p>
                <h4>
                    <?php echo implode(', ', $comic['artists']); ?>
                </h4>
            </div>
            <div class="comic-info-box">
                <p>
                    Written by:</p>
                <h4>
                    <?php echo implode(', ', $comic['writers']); ?>
                </h4>
            </div>
        </div>
    </div>
    <div class="comic-info-right">
        <h3>Specs</h3>
        <div class = "comic-info-box-right">
            <p>Series:</p>
            <h4>
                {{ $comic['series'] }}
            </h4>
        </div>
        <div class = "comic-info-box-right">
            <p>
                U.S. price:
            </p>
            <h4>
                {{ $comic['price'] }}
            </h4>
        </div>
        <div class="comic-info-box-right">
            <p>On Sale date:
            </p>
            <h4>
                {{ $comic['sale_date'] }}
            </h4>
        </div>
    </div>
</div>
